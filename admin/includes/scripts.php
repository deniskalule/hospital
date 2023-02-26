<script>
        $(document).ready( function () {
            $('#table').dataTable();
        } );
        
</script>

<script>
    var bars = document.querySelector("#bars");
    var sidebar = document.querySelector(".sidebar");
    var content = document.querySelector(".content");

    bars.onclick = function()
    {
        // alert("under testing");
        sidebar.classList.toggle("active");
        content.classList.toggle("active");
    }
</script>

<script>
        dycalendar.draw({
            target: '#calendar',
            type: 'month',
            // dayformat: 'full',
            // monthformat: 'full',
            highlighttargetdate: true,
            // prevnextbutton: 'show'

        })
    </script>

<script>
  const labels = ['s1','s2','s3','s4','s5'];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Out Patients',
      backgroundColor: 'rgb(0,0,100)',
      borderColor: 'rgb(255, 99, 132)',
      data: [30,10,20,70,50],
      
      },
    ]
  };

  const label = ['s1','s2','s3','s4','s5'];

  const data1 = {
    labels: label,
    datasets: [{
      label: 'in Patients',
      backgroundColor: 'rgb(0,100,100)',
      borderColor: 'rgb(255, 99, 132)',
      data: [30,40,20,70,50],
    },
    ]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };

  const config1 = {
    type: 'line',
    data: data1,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('mychart'),
    config
  );
  const my1 = new Chart(
    document.getElementById('my1'),
    config1
  );
</script>