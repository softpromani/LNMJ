<div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar" style="margin-top: 20px;">

    <div class="list-group border-0 text-left text-md-left">

        <a href="{{route('acd.phd')}}"  class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Ph.D.</span> </a>
        <a href="{{route('acd.faculties')}}" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Faculties</span> </a>
        <a href="{{route('policies')}}" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Policies</span> </a>
        {{-- <a href="{{route('adm.registrar')}}" class="list-group-item d-inline-block collapsed sidenav "> <span class="d-none d-md-inline">Self</span> </a> --}}
        <a href="#menu2" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Colleges.</span> </a>
        <div class="collapse" id="menu2" data-parent="#sidebar"  >

            {{-- <a href="{{route('aqar')}}" class="list-group-item">AQAR </a> --}}
            <a href="{{ route('constituentColleges') }}" class="list-group-item">Constituent Colleges </a>
            <a href="#menu3" class="list-group-item" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Affiliated Colleges</span> </a>
            <div class="collapse" id="menu3" data-parent="#sidebar"  >

                {{-- <a href="{{route('aqar')}}" class="list-group-item">AQAR </a> --}}
                <a href="{{ route('affiliatedDegreeColleges') }}" class="list-group-item">Affiliated Degree Colleges </a>
                <a href="{{ route('affiliatedBedColleges') }}" class="list-group-item">Affiliated B.Ed. Colleges </a>
                <a href="{{ route('affiliatedTechnicalColleges') }}" class="list-group-item">Affiliated Technical Colleges </a>

            </div>

        </div>
        <a href="#menu4" class="list-group-item d-inline-block collapsed" data-toggle="collapse" aria-expanded="false" > <span class="d-none d-md-inline">Self Financed Inst.</span> </a>
        <div class="collapse" id="menu4" data-parent="#sidebar"  >

            {{-- <a href="{{route('aqar')}}" class="list-group-item">AQAR </a> --}}
            <a href="https://ddelnmu.ac.in/" class="list-group-item">Directorate of Distance Education </a>
            <a href="https://witlnmu.ac.in/" class="list-group-item">Dr. APJ Abdul Kalam Women's Institute </a>
            <a href="{{ route('departmentBusinessDepartment') }}" class="list-group-item">Master of Business Administration </a>
            <a href="https://www.ifllnmu.com/" class="list-group-item">Institute of Foreign Languages </a>
            <a href="{{ route('departmentBioTechnology') }}" class="list-group-item">Department of Bio-Technology </a>
            <a href="{{ route('departmentInformationScience') }}" class="list-group-item">Inst. of Library & Information Science </a>
            <a href="{{ route('departmentGerontology') }}" class="list-group-item">Inst. of Gerontology and Geriatrics </a>
            <a href="{{ route('advanceResearch') }}" class="list-group-item">Centre of Advance Research in Nano Science & Technology </a>
            <a href="{{ route('womenStudies') }}" class="list-group-item">Women Studies </a>
            <a href="#" class="list-group-item">Bachelor of Education </a>
        </div>


    </div>
</div>



