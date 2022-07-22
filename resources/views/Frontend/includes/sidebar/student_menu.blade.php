<div class="list-group border-0 text-left text-md-left">
    <a href="{{route('admission.home')}}" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Admission</span> </a>
    <a href="#menu1" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Examination</span> </a>
    <div class="collapse" id="menu1" data-parent="#sidebar"  >
        <a href="#" class="list-group-item">Examination Calendar </a>
        <a href="{{route('examResult')}}" class="list-group-item">Examination Result </a>
    </div>
    <a href="#menu2" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Committees / Cells</span> </a>
    <div class="collapse" id="menu2" data-parent="#sidebar"  >
        <a href="{{ route('cells') }}" class="list-group-item">Press & Media Cells </a>
        <a href="{{ route('cells') }}" class="list-group-item">Internal Complaint Committee </a>
        <a href="{{ route('cells') }}" class="list-group-item">Alumini Association </a>
        <a href="{{ route('cells') }}" class="list-group-item">Equal Opportunity Cell </a>
        <a href="{{ route('cells') }}" class="list-group-item">Grievance/Redressal Cell</a>
        <a href="{{ route('cells') }}" class="list-group-item">Anti Ragging Cell</a>
        <a href="{{ route('cells') }}" class="list-group-item">Gender Sensitization Cell </a>
        <a href="{{ route('cells') }}" class="list-group-item">Women Cell</a>
        <a href="{{ route('cells') }}" class="list-group-item">Students Cell </a>
        <a href="{{ route('cells') }}" class="list-group-item">Placement Cell </a>
        <a href="{{ route('cells') }}" class="list-group-item">Publication Cell </a>
    </div>
    <a href="{{ route('feeStructure') }}" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">Fee Structure</span> </a>
    <a href="https://www.7nishchay-yuvaupmission.bihar.gov.in/resources/User_Manual_for_BSCCpdf1.pdf" class="list-group-item d-inline-block collapsed"> <span class="d-none d-md-inline">Student Credit Card Guideline
    </span> </a>
    <a href="#menu3" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Library</span> </a>
    <div class="collapse" id="menu3" data-parent="#sidebar"  >
        <a href="#" class="list-group-item">M.K.S. Institute of social and research library</a>
        <a href="{{ route('centralLibrary') }}" class="list-group-item">Central Library </a>
    </div>
    <a href="{{ route('hostel') }}" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Hostel</span> </a>
    <a href="{{ route('studentScholarship') }}" class="list-group-item d-inline-block collapsed" > <span class="d-none d-md-inline">Scholarship</span> </a>
</div>
