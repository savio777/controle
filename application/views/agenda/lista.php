<!-- tutorial em pt-br ~> https://www.youtube.com/playlist?list=PLmY5AEiqDWwBLoG5upZVIdkf_111ZHyH8 -->
<!-- calendario JS usado ~> https://fullcalendar.io/ -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
$url_base = 'http://localhost/controle/assets';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Agenda</title>
  <meta charset='utf-8'>
  <link href='<?php echo $url_base ?>/packages/core/main.css' rel='stylesheet' />
  <link href='<?php echo $url_base ?>/packages/daygrid/main.css' rel='stylesheet' />
  <link href='<?php echo $url_base ?>/packages/timegrid/main.css' rel='stylesheet' />
  <link href='<?php echo $url_base ?>/packages/list/main.css' rel='stylesheet' />
  <script src='<?php echo $url_base ?>/packages/core/main.js'></script>
  <script src='<?php echo $url_base ?>/packages/interaction/main.js'></script>
  <script src='<?php echo $url_base ?>/packages/daygrid/main.js'></script>
  <script src='<?php echo $url_base ?>/packages/timegrid/main.js'></script>
  <script src='<?php echo $url_base ?>/packages/list/main.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
        height: 'parent',
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        defaultView: 'dayGridMonth',
        defaultDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
          <?php foreach ($resultado as $i) { ?> {
              title: '<?php echo ($i->titulo) ?>',
              start: '<?php echo ($i->comeco) ?>',
              end: '<?php echo ($i->fim) ?>',
              color: '<?php echo ($i->cor) ?>',
              textColor: '<?php echo ($i->cortexto) ?>',
              url: '../index.php/agenda/detalhes/<?php echo ($i->id) ?>'
            },
          <?php } ?>

        ]
      });

      calendar.render();
    });
  </script>
  <style>
    html,
    body {
      overflow: hidden;
      /* don't do scrollbars */
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    }

    #calendar-container {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    .fc-header-toolbar {
      /*
    the calendar will be butting up against the edges,
    but let's scoot in the header's buttons
    */
      padding-top: 1em;
      padding-left: 1em;
      padding-right: 1em;
    }
  </style>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <div class="container">
    <!-- botão voltar -->
    <a class="waves-effect waves-light btn" href="../index.php/home">
      <i class="small material-icons left">keyboard_arrow_left</i>voltar
    </a>
    <!-- botão para adicionar novos eventos -->
    <a class="waves-effect waves-light btn" href="agenda/adicionar">
      <i class="small material-icons left">add</i>Adicionar Evento
    </a>
  </div>

  <div id='calendar-container'>
    <div id='calendar'></div>
  </div>

</body>

</html>