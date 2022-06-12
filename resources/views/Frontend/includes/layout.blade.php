<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en-gb">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <script language="JavaScript">
        function MakeArray(n) {
            this.length = n
            return this
        }
        monthNames = new MakeArray(12)
        monthNames[1] = "January"
        monthNames[2] = "February"
        monthNames[3] = "March"
        monthNames[4] = "April"
        monthNames[5] = "May"
        monthNames[6] = "June"
        monthNames[7] = "July"
        monthNames[8] = "August"
        monthNames[9] = "September"
        monthNames[10] = "October"
        monthNames[11] = "November"
        monthNames[12] = "December"
        dayNames = new MakeArray(7)
        dayNames[1] = "Sunday"
        dayNames[2] = "Monday"
        dayNames[3] = "Tuesday"
        dayNames[4] = "Wednesday"
        dayNames[5] = "Thursday"
        dayNames[6] = "Friday"
        dayNames[7] = "Saturday"

        function customDateString() {
            currentDate = new Date()
            var theDay = dayNames[currentDate.getDay() + 1]
            var theMonth = monthNames[currentDate.getMonth() + 1]
            msie4 = ((navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4));
            if (msie4) {
                var theYear = currentDate.getYear()
            } else {
                var theYear = currentDate.getYear() + 1900
            }
            return theDay + ", " + theMonth + " " + currentDate.getDate() + ", " + theYear
        }
    </script>
    @include('Frontend.includes.head')
</head>

<body id="bd" class="homepage home-layout1 res">

    <div id="yt_wrapper" class="layout-wide">
        <!-- header starts here -->
        @include('Frontend.includes.header')
        <!-- header ends here -->

        <section>
            @yield('content')
        </section>





        @include('Frontend.includes.footertop')

        @include('Frontend.includes.footer')
    </div>


    @include('Frontend.includes.foot')

</body>

</html>
