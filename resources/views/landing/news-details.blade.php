@extends('layouts.landing')

@section('title', 'News Details')

@section('content')
    <!-- Page Header -->
    <section style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%); padding: 30px 0;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0" style="background: transparent; padding: 0;">
                    <li class="breadcrumb-item"><a href="{{ route('landing.home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item text-warning active" aria-current="page">Post Details</li>
                </ol>
            </nav>
            <h2 class="text-white mt-2 mb-0" style="font-weight: 600;">Post Details</h2>
        </div>
    </section>

    <!-- News Details Content -->
    <section class="py-5" style="background: #f8fafc;">
        <div class="container">
            <div class="row g-4">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm" style="border-radius: 0;">
                        <div class="card-body p-4 p-lg-5">
                            <!-- News Title -->
                            <h3 class="mb-4" style="color: #1e3a8a; font-weight: 700; line-height: 1.4; text-transform: uppercase;">
                                KIKULETWA KUWA KITOVU CHA MAFUNZO YA NISHATI JADIDIFU AFRIKA MASHARIKI
                            </h3>
                            
                            <!-- Date -->
                            <div class="mb-4 pb-3 border-bottom" style="border-color: #e2e8f0 !important;">
                                <span style="color: #6b7280; font-size: 0.9rem;">
                                    <i class="far fa-calendar-alt me-2"></i>Jan 09, 2026
                                </span>
                            </div>
                            
                            <!-- News Image -->
                            <div class="mb-4">
                                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&h=400&fit=crop" 
                                     alt="News Image" 
                                     class="img-fluid w-100" 
                                     style="max-height: 400px; object-fit: cover;">
                            </div>
                            
                            <!-- News Content -->
                            <div class="news-content" style="color: #4b5563; line-height: 1.8; font-size: 0.95rem;">
                                <p class="mb-3">
                                    Imeelezwa kuwa Serikali imefanya uwekezaji mkubwa kupitia mradi wa EASTRIP ili kukifanya St. Aggrey College of Health Sciences (SACHS), kuwa kitovu cha mafunzo ya afya kwa ukanda wa Afrika Mashariki na Afrika kwa ujumla.
                                </p>
                                
                                <p class="mb-3">
                                    Akizungumza Januari 6, 2026 wakati wa ziara yake katika chuo hicho, Naibu Waziri wa Afya, Mhe. [Waziri Name] alisema kuwa utekelezaji wa mradi wa EASTRIP utakifanya SACHS kuwa kitovu cha mafunzo ya vitendo katika sekta ya afya ikiwemo madawa, upasuaji, na utoaji wa huduma za afya.
                                </p>
                                
                                <p class="mb-3">
                                    Alielekeza kuwa ujenzi wa maabara ya kisasa utasaidia kutoa wahitimu wenye ujuzi unaohitajika, na kusisitiza umuhimu wa kuwahusisha wakufunzi na wanafunzi moja kwa moja katika mafunzo haya ili kuongeza uwezo wa kitaaluma na kuboresha huduma za afya.
                                </p>
                                
                                <p class="mb-3">
                                    Aidha, Naibu Waziri alielekeza chuo kuendelea na kuimarisha mahusiano na hospitali pamoja na taasisi za afya ndani na nje ya nchi. Hatua hiyo inalenga kutoa fursa kwa watumishi na wanafunzi kushiriki katika mafunzo ya pamoja zinazoweza kujibu changamoto za kijamii na kiuchumi.
                                </p>
                                
                                <p class="mb-0">
                                    Kwa upande wake, Mkuu wa St. Aggrey College of Health Sciences, Prof. [Rector Name], alisema kuwa utekelezaji wa mradi wa EASTRIP umewezesha ujenzi wa maabara ya kufundishia, umeongeza udahili wa wanafunzi hasa wa kike, na kuanzishwa kwa mitaala mipya katika fani za afya. Pia umewezesha ujenzi wa miundombinu mipya katika chuo pamoja na vifaa vya kisasa vya kufundishia na kujifunzia. Prof. [Name] aliongeza kuwa ili kuhakikisha utekelezaji wa elimu amali unafanikiwa, chuo kimeweka mkakati wa kuhamasisha wanafunzi kupenda na kuchagua elimu ya afya hususan katika mafunzo ya afya jadidifu.
                                </p>
                            </div>
                            
                            <!-- Share Buttons -->
                            <div class="mt-4 pt-4 border-top" style="border-color: #e2e8f0 !important;">
                                <span class="me-3" style="color: #6b7280; font-weight: 500;">Share:</span>
                                <a href="#" class="btn btn-sm btn-primary me-2" style="background: #1877f2; border: none;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-info me-2" style="background: #1da1f2; border: none;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-success me-2" style="background: #25d366; border: none;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar - Other Posts -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm" style="border-radius: 0; border-top: 3px solid #1e3a8a;">
                        <div class="card-header bg-white border-0 py-3">
                            <h5 class="mb-0" style="color: #1e3a8a; font-weight: 600;">Other Posts</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <!-- Post 1 -->
                                <a href="#" class="list-group-item list-group-item-action border-0 py-3" style="border-bottom: 1px solid #e2e8f0 !important;">
                                    <h6 class="mb-1" style="color: #1e3a8a; font-size: 0.85rem; font-weight: 600; line-height: 1.4;">
                                        SACHS, RUWASA WAINGIA MAKUBALIANO YA KUTENGENEZA MITA JANJA ZA MAJI
                                    </h6>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        <i class="far fa-calendar me-1"></i>Jan 16, 2026
                                    </small>
                                </a>
                                
                                <!-- Post 2 -->
                                <a href="#" class="list-group-item list-group-item-action border-0 py-3" style="border-bottom: 1px solid #e2e8f0 !important;">
                                    <h6 class="mb-1" style="color: #1e3a8a; font-size: 0.85rem; font-weight: 600; line-height: 1.4;">
                                        BODI YA UTAWALA SACHS YAPONGEZA UJENZI WA MAABARA YA KISASA
                                    </h6>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        <i class="far fa-calendar me-1"></i>Aug 21, 2025
                                    </small>
                                </a>
                                
                                <!-- Post 3 -->
                                <a href="#" class="list-group-item list-group-item-action border-0 py-3" style="border-bottom: 1px solid #e2e8f0 !important;">
                                    <h6 class="mb-1" style="color: #1e3a8a; font-size: 0.85rem; font-weight: 600; line-height: 1.4;">
                                        MRADI WA TELMS KUIMARISHA TAASISI ZA ELIMU YA AFYA NCHINI
                                    </h6>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        <i class="far fa-calendar me-1"></i>Aug 12, 2025
                                    </small>
                                </a>
                                
                                <!-- Post 4 -->
                                <a href="#" class="list-group-item list-group-item-action border-0 py-3" style="border-bottom: 1px solid #e2e8f0 !important;">
                                    <h6 class="mb-1" style="color: #1e3a8a; font-size: 0.85rem; font-weight: 600; line-height: 1.4;">
                                        CONFERENCE ON HEALTHCARE EDUCATION (July 1st - 4th 2025)
                                    </h6>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        <i class="far fa-calendar me-1"></i>Jun 25, 2025
                                    </small>
                                </a>
                                
                                <!-- Post 5 -->
                                <a href="#" class="list-group-item list-group-item-action border-0 py-3" style="border-bottom: 1px solid #e2e8f0 !important;">
                                    <h6 class="mb-1" style="color: #1e3a8a; font-size: 0.85rem; font-weight: 600; line-height: 1.4;">
                                        ACADEMIC PROMOTIONS 2025
                                    </h6>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        <i class="far fa-calendar me-1"></i>Jun 20, 2025
                                    </small>
                                </a>
                                
                                <!-- Post 6 -->
                                <a href="#" class="list-group-item list-group-item-action border-0 py-3" style="border-bottom: 1px solid #e2e8f0 !important;">
                                    <h6 class="mb-1" style="color: #1e3a8a; font-size: 0.85rem; font-weight: 600; line-height: 1.4;">
                                        WIZARA YA AFYA YARIDHISHWA NA UTEKELEZAJI WA MRADI WA EASTRIP SACHS
                                    </h6>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        <i class="far fa-calendar me-1"></i>May 29, 2025
                                    </small>
                                </a>
                                
                                <!-- Post 7 -->
                                <a href="#" class="list-group-item list-group-item-action border-0 py-3">
                                    <h6 class="mb-1" style="color: #1e3a8a; font-size: 0.85rem; font-weight: 600; line-height: 1.4;">
                                        SACHS KWA KUSHIRIKIANA NA WADAU WAZINDUA MAABARA YA UBUNIFU
                                    </h6>
                                    <small class="text-muted" style="font-size: 0.75rem;">
                                        <i class="far fa-calendar me-1"></i>May 29, 2025
                                    </small>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Contact Card -->
                    <div class="card border-0 shadow-sm mt-4" style="border-radius: 0; background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);">
                        <div class="card-body p-4 text-center text-white">
                            <i class="fas fa-phone-alt fa-2x mb-3" style="color: #fbbf24;"></i>
                            <h6 class="mb-2">Contact Us</h6>
                            <p class="mb-1" style="font-size: 0.85rem; opacity: 0.9;">
                                <i class="fas fa-map-marker-alt me-2"></i>P.O. Box 2954, Mbeya
                            </p>
                            <p class="mb-1" style="font-size: 0.85rem; opacity: 0.9;">
                                <i class="fas fa-phone me-2"></i>0717327632
                            </p>
                            <p class="mb-0" style="font-size: 0.85rem; opacity: 0.9;">
                                <i class="fas fa-envelope me-2"></i>staggreyhealth@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
