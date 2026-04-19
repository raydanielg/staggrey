<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance';

    protected $fillable = [
        'student_id',
        'course_id',
        'timetable_id',
        'attendance_date',
        'status',
        'remarks',
        'marked_by',
    ];

    protected $casts = [
        'attendance_date' => 'date',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function timetable()
    {
        return $this->belongsTo(Timetable::class);
    }

    public function markedBy()
    {
        return $this->belongsTo(User::class, 'marked_by');
    }

    public static function getStudentAttendancePercentage($studentId, $courseId, $semester)
    {
        $totalSessions = self::where('student_id', $studentId)
            ->where('course_id', $courseId)
            ->whereHas('timetable', function ($q) use ($semester) {
                $q->where('semester', $semester);
            })
            ->count();

        if ($totalSessions == 0) {
            return 0;
        }

        $presentSessions = self::where('student_id', $studentId)
            ->where('course_id', $courseId)
            ->whereIn('status', ['present', 'late'])
            ->whereHas('timetable', function ($q) use ($semester) {
                $q->where('semester', $semester);
            })
            ->count();

        return round(($presentSessions / $totalSessions) * 100, 2);
    }
}
