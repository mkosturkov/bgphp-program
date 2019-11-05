<?php /* Template Name: BGPHP19 Schedule */ ?>
<?php get_header();?>

<style>.main-container {
    position: relative;
    width: 100%;
    max-width: 1280px;
    margin: auto;
    font-family: "Montserrat", sans-serif;
    font-size: 16px;
    font-weight: 500;
    line-height: 1em;
}

.main-container * {
    position: relative;
}

.main-container h1 {
    text-align: center;
    font-weight: bold;
}

.programme {
    margin: auto;
}

.fixed-container {
    width: 100%;
    z-index: 10000000;
}

.day-buttons {
    display: flex;
}

.day-button {
    height: 50px;
    flex: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    opacity:1;
    background:white;
}

.day-button.active {
    background: #4cb7b0;
    color: white;
    font-weight: bold;
}

.days-container {
    display: none;
}

.days-container.active {
    display: block;
}

table {
    width: 100%;
    border-collapse: collapse;
}

tr {
    border-top: 1px solid black;
}

thead tr {
    border-top: none;
}

td, th {
    text-align: center;
    height: 4em;
    width: 30%;
    border: 1px solid black;
}

td:first-child, th {
    border: none;
}

tr:last-child td:first-child {
    border-bottom: 1px solid black;
}

td:nth-child(2) {
    border-left: none;
}

td:last-child {
    border-right: none;
}

th:first-child, td:first-child {
    width: 10%;
}

.break {
    font-weight: bold;
    background-color: #4cb7b02b;
}

.lunch-break {
    height: 6em;
}

.talk-title, .speaker-name {
    display: block;
}

.speaker-name {
    margin-top: 0.5em;
    font-style: italic;
    font-weight: 400;
}

.unConf {
    font-weight: bold;
}

.lunch-break td {
    height: 8em;
}

.sponsor-talk {
    position: absolute;
    top: 0;
    box-sizing: border-box;
    width: 33.3333%;
    height: 50%;
    padding: 10px 0;
    background: white;
    font-weight: 500;
    border: 1px solid black;
    border-top: none;
}

@media (max-width: 767px) {
    .days-dropdown-wrapper {
        display: block !important;
    }
    
    .track-list-btns { 
        margin-left: -40px;
    }

    .day-buttons {
        display: none;
    }

    .track-list-btns.track-list li:first-child {
        width: 0;
        display: none;
    }

    .track-list-btns li {
        height: 43px;
        padding-top: 25px;
    }

    .track-list-btns li:hover {
        cursor: pointer;
    }

    .track-list-btns li.active {
        background: #4cb7b0;
        color: white;
    }

    .track-list-btns.talks-tracks {
        margin-left: -100px;
        /*width: 90%;*/
    }

    .tra

    .programme {
        position: relative;
        width: 100%;
    }

    .day-buttons {
        float: left;
        width: 50px;
        height: 100vh;
        flex-direction: column;
        margin-right: 10px;
    }

    .day-button span {
        white-space: nowrap;
        transform: rotate(-90deg);
    }

    table {
        float: left;
    }

    table, tbody, thead, tr, th {
        display: block;
        overflow: auto;
    }

    thead tr {
        display: flex;
        margin-bottom: 10px;
    }

    td, td {
        height: 6em;
    }

    th:first-child {
        display: none;
    }

    th {
        display: flex;
        width: 33%;
        justify-content: center;
        align-items: center;
        border: none;
        cursor: pointer;
    }

    th.active {
        background: #4cb7b0;
        color: white;
    }

    td {
        float: left;
        display: none;
        padding: 0;
        margin: 0;
        border: none;
    }

    td:first-child,
    td[colspan],
    td.active
    {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    td:first-child {
        width: 80px;
    }

    td.active, td[colspan] {
        width: calc(100% - 80px);
    }

    tr.unConf-time.active td {
        height: 9em;
    }

    tr.unConf-time.active + tr,
    tr.unConf-time.active + tr + tr
    {
        display: none;
    }

    tr:last-child td {
        border-bottom: 1px solid black;
    }

    tr.lunch-break, tr.lunch-break td {
        height: 12em;
    }

    .sponsor-talk {
        display: none;
        position: relative;
        top: -20%;
        height: 50%;
        width: 100%;
        border-right: none;
    }

    .sponsor-talk.active {
        display: block;
    }
}

.fixed-container {
    width: 100%;
    background-color: white;
}
.track-list-btns {
    display: flex;
    align-items: stretch; /* Default */
    justify-content: space-between;
    width: 100%;
    margin-top: 0px;
    padding-top: 20px;
    font-weight: bold;
    padding-bottom: 16px;
    background-color: white;
}

.track-list-btns li {
    display: block;
    text-align: center;
    flex: 1 1 auto; /* Default */
    list-style-type: none;
    width: 30%;
}

@media (min-width: 767px) {
    .track-list-btns.talks-tracks li:first-child {
    width: 4%;
}

.track-list-btns.talks-tracks.fixed, .day-buttons.fixed {
    width: 1280px;
    margin: 0 auto;
}
}

    

.days-dropdown-wrapper {
    display: none;
    background-color: white;
    padding-top: 10px;
}

.days-dropdown-wrapper select {
    display: block;
    margin: 0 auto;
    font-size: 20px;
}
</style>
<div class="main-container">
    <h1>Schedule</h1>
    <div class="programme">
        <div class="fixed-container">
            <div class="day-buttons">
                <div class="day-button day-button-0 workshops">
                    <span>Workshop Day</span>
                </div>
                <div class="day-button day-button-1 active">
                    <span>Day 1</span>
                </div>
                <div class="day-button day-button-2">
                    <span>Day 2</span>
                </div>
            </div>

            <div class="days-dropdown-wrapper">
                <select name="" id="">
                    <option value="0">Workshop Day</option>
                    <option selected value="1">Day 1</option>
                    <option value="2">Day 2</option>
                </select>
            </div>

            <ul class="track-list-btns talks-tracks">
                <li></li>
                <li data-col="0">Ty's Track</li>
                <li data-col="1" class="active">Track SiteGround</li>
                <li data-col="2">Track B</li>
            </ul>

            <ul class="track-list-btns workshops-tracks" style="display: none;">
                <li data-col="0" class="active">Track A</li>
                <li data-col="1">Track B</li>
            </ul>
        </div>

        <div class="days-container">
            <table>
                <tbody>
                    <tr>
                        <td>08:30</td>
                        <td colspan="2">
                            Registration
                        </td>
                    </tr>
                    <tr>
                        <td>09:00</td>
                        <td class="active">
                            <span class="talk-title">
                                Hack this workshop!
                            </span>
                                <span class="speaker-name">
                                Christopher Riley
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                Command and event patterns
                            </span>
                                <span class="speaker-name">
                                Miro Svrtan
                            </span>
                        </td>
                    </tr>
                    <tr class="break lunch-break">
                        <td>12:00</td>
                        <td colspan="3">Break</td>
                    </tr>
                    <tr>
                        <td>14:00</td>
                        <td class="active">
                            <span class="talk-title">
                                Code like a Pro
                            </span>
                            <span class="speaker-name">
                                Stefan Priebsch
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                Best practices for crafting high quality PHP apps
                            </span>
                            <span class="speaker-name">
                                James Titcumb
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="days-container active">
            <table>
                <tbody>
                    <tr>
                        <td>08:00</td>
                        <td colspan="3">Registration</td>
                    </tr>
                    <tr>
                        <td>09:30</td>
                        <td colspan="3">Opening</td>
                    </tr>
                    <tr>
                        <td>09:40</td>
                        <td colspan="3">
                            <span class="talk-title">
                                Openning Keynote: Community Driven Development
                            </span>
                            <span class="speaker-name">
                                Mihail Irintchev
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>10:20</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>10:40</td>
                        <td>
                            <span class="talk-title">
                                Think like a hacker
                            </span>
                            <span class="speaker-name">
                                Matt Brunt
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                CQRS & ES Explained
                            </span>
                            <span class="speaker-name">
                                Stefan Priebsch
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                The Web of the Future: Introduction to the Semantic Web
                            </span>
                            <span class="speaker-name">
                                Arnout Boks
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>11:20</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>11:40</td>
                        <td>
                            <span class="talk-title">
                                The Secrets of Hexagonal Architecture
                            </span>
                            <span class="speaker-name">
                                Nicolas Carlo
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Transpiling PHP
                            </span>
                            <span class="speaker-name">
                                Miro Svrtan
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                Design First API Development With OpenAPI And Friends
                            </span>
                            <span class="speaker-name">
                                Boyan Yordanov
                            </span>
                        </td>
                    </tr>
                    <tr class="break lunch-break">
                        <td>12:20</td>
                        <td colspan="3">
                            <section class="sponsor-talk tys-track">
                                Paysera: 3 reasons to integrate Paysera payment gateway (P.S. One is &#x1F4B2;)
                            </section>
                            <span class="break-title">Lunch Break</span>
                        </td>
                    </tr>
                    <tr>
                        <td>13:50</td>
                        <td>
                            <span class="talk-title">
                                Automatic Web Page Optimisation in Pure PHP
                            </span>
                            <span class="speaker-name">
                                Albert Peschar
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Learning the PHP-FIG HTTP Stack
                            </span>
                            <span class="speaker-name">
                                Beau Simensen
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                IT’s a trap, or how to survive in IT (and avoid drama)
                            </span>
                            <span class="speaker-name">
                                Nadezhda Danabasheva
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>14:30</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>14:50</td>
                        <td>
                            <span class="talk-title">
                                Escaping from OOP boundaries
                            </span>
                            <span class="speaker-name">
                                Alexander Lisachenko
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Lessons Learned From 16 Years Of Testing PHP Code
                            </span>
                            <span class="speaker-name">
                                Chris Hartjes
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                Compiling the world to WebAssembly
                            </span>
                            <span class="speaker-name">
                                Boyan Mihaylov
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>15:30</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr class="unConf-time">
                        <td>15:50</td>
                        <td>
                            <span class="talk-title">
                                WordPress Through The Terminal
                            </span>
                            <span class="speaker-name">
                                Milana Cap
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Theory of programming: packaging principles
                            </span>
                            <span class="speaker-name">
                                Alexander Makarov
                            </span>
                        </td>
                        <td rowspan="3">
                            <span class="unConf">unConf</span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>16:30</td>
                        <td colspan="2">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>16:50</td>
                        <td>
                            <span class="talk-title">
                                Exploring Async PHP
                            </span>
                            <span class="speaker-name">
                                Daniel Leech
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                More Than a Query Language: SQL in the 21st Century
                            </span>
                            <span class="speaker-name">
                                Markus Winnand
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>17:30</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>17:50</td>
                        <td colspan="3">PHP-FIG Panel</td>
                    </tr>
                    <tr>
                        <td>18:50</td>
                        <td colspan="3">Closing Remarks - Day 1</td>
                    </tr>
                    <tr class="break">
                        <td>19:00</td>
                        <td colspan="3">Cocktail Party</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="days-container">
            <table>
                <tbody>
                    <tr>
                        <td>09:00</td>
                        <td colspan="3">Doors Open / Morning Coffee</td>
                    </tr>
                    <tr>
                        <td>10:00</td>
                        <td colspan="3">
                            <span class="talk-title">
                                Rethinking What You Think You Know
                            </span>
                            <span class="speaker-name">
                                    Paul Jones
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>10:40</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>11:00</td>
                        <td>
                            <span class="talk-title">
                                Hardware connectivity on the progressive web
                            </span>
                            <span class="speaker-name">
                                Majid Hajian
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Event driven development
                            </span>
                            <span class="speaker-name">
                                    Christopher Riley
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                HTTP/3: It’s all about the transport!
                            </span>
                            <span class="speaker-name">
                                Benoit Jacquemont
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>11:40</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td>
                            <span class="talk-title">
                                Functional Programming in PHP​
                            </span>
                            <span class="speaker-name">
                                Lochemem Bruno Michael
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Looking into the Illuminate Container
                            </span>
                            <span class="speaker-name">
                                Ian Littman
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                Using SOLID design principles to improve team performance
                            </span>
                            <span class="speaker-name">
                                Katerina Trajchevska
                            </span>
                        </td>
                    </tr>
                    <tr class="break lunch-break">
                        <td>12:40</td>
                        <td colspan="3">Lunch Break</td>
                    </tr>
                    <tr>
                        <td>14:10</td>
                        <td>
                            <span class="talk-title">
                                The journey to a stress-free release
                            </span>
                            <span class="speaker-name">
                                Tosho Trajanov
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                How to tame a &#x1F984;
                            </span>
                            <span class="speaker-name">
                                Andreas Heigl
                            </span>
                        </td>
                        <td>
                            <span class="talk-title">
                                Senior Developer Development
                            </span>
                            <span class="speaker-name">
                                Szymon Skórczyński
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>14:50</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>15:10</td>
                        <td>
                            <span class="talk-title">
                                Mission possible: Oblivious Transfer
                            </span>
                            <span class="speaker-name">
                                Lyubomir Filipov
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Effortless Software Development
                            </span>
                            <span class="speaker-name">
                                Anna Filina
                            </span>
                        </td>
                        <td>
                            <span class="speaker-name">
                                To be announced
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>15:50</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr class="unConf-time">
                        <td>16:10</td>
                        <td>
                            <span class="talk-title">
                                 Lua as a second language
                            </span>
                            <span class="speaker-name">
                                Luka Muzinic
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Backwards Incompatible Tales
                            </span>
                            <span class="speaker-name">
                                Marco Pivetta
                            </span>
                        </td>
                        <td rowspan="3">
                            <span class="unConf">unConf</span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>16:50</td>
                        <td colspan="2">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>17:10</td>
                        <td>
                            <span class="talk-title">
                                The Recording HTTP Proxy: Not Yet Another Messiah
                            </span>
                            <span class="speaker-name">
                                Viktor Todorov
                            </span>
                        </td>
                        <td class="active">
                            <span class="talk-title">
                                Handling Exceptional Conditions with Grace and Style
                            </span>
                            <span class="speaker-name">
                                Nikola Poša
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>17:50</td>
                        <td colspan="3">Coffee Break</td>
                    </tr>
                    <tr>
                        <td>18:10</td>
                        <td colspan="3">
                            <span class="talk-title">
                                Closing Keynote: Leadership As a Joke
                            </span>
                            <span class="speaker-name">
                                Cal Evans
                            </span>
                        </td>
                    </tr>
                    <tr class="break">
                        <td>18:50</td>
                        <td colspan="3">Prizes and Closing</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script>
  (function () {
    document.querySelectorAll('.day-button').forEach(function (button, buttonIdx) {
      button.addEventListener('click', function () {
        document.querySelectorAll('.day-button, .days-container').forEach(function (e) {
          e.classList.remove('active');
        });
        button.classList.add('active');
        document.querySelector('.days-container:nth-child(' + (buttonIdx + 2) + ')').classList.add('active');

        if (button.classList.contains('workshops')) {
            let workshopTracksList = document.getElementsByClassName('workshops-tracks')[0];
            workshopTracksList.style.display = 'flex';
            let talksTracksList = document.getElementsByClassName('talks-tracks')[0];
            talksTracksList.style.display = 'none';
        } else {
            let workshopTracksList = document.getElementsByClassName('workshops-tracks')[0];
            workshopTracksList.style.display = 'none';
            let talksTracksList = document.getElementsByClassName('talks-tracks')[0];
            talksTracksList.style.display = 'flex';
        }

      });
    });

    document.querySelectorAll('.days-container table').forEach(function (table) {
      table.querySelectorAll('th:not(:first-child)').forEach(function (th, colIdx) {
        th.addEventListener('click', function () {
          table.querySelectorAll('td, tr, th').forEach(function (e) {
            e.classList.remove('active');
          });
          th.classList.add('active');
          table.querySelectorAll('td:nth-child(' + (colIdx + 2) + ')').forEach(function (td) {
            td.classList.add('active');
          });
          if (colIdx === 2) {
            table.querySelector('tr.unConf-time').classList.add('active');
          }
          var sponsorTalk = table.querySelector('.sponsor-talk');
          if (sponsorTalk && colIdx === 0) {
            sponsorTalk.classList.add('active');
          } else if (sponsorTalk) {
            sponsorTalk.classList.remove('active');
          }
        });
      });
    });
  })();
</script>

<script>
    var $dayButtons = $('.fixed-container');
    var fixmeTop = $dayButtons.offset().top;
    $(window).scroll(function() {
        var currentScroll = $(window).scrollTop();

        if (currentScroll >= fixmeTop) {
            $dayButtons.css({
                position: 'fixed',
                top: '0',
                left: '0',
            });
            $('.track-list-btns.talks-tracks, .day-buttons').addClass('fixed');
        } else {
            $dayButtons.css({
                position: 'static'
            });
            $('.track-list-btns.talks-tracks .day-buttons').removeClass('fixed');

        }
    });

    $('.track-list-btns li').on('click', function (e) {
        if ($(this).is(':first-child')) {
            return false;
        }
        $('.track-list-btns li').removeClass('active');
        $(this).addClass('active');
        var colIdx = $(this).data('col') + 2;

        $('.days-container table tr, .days-container table td, .days-container table th').removeClass('active');
        $('.days-container table td:nth-child('+colIdx+')').addClass('active');
        if ($(this).data('col') === 2) {
            $('tr.unConf-time').addClass('active');
        }

        var sponsorTalk = $('.sponsor-talk');
        if (sponsorTalk && $(this).data('col') == 0) {
            sponsorTalk.addClass('active');
        } else if (sponsorTalk) {
            sponsorTalk.removeClass('active');
        }
    });

    $('.days-dropdown-wrapper select').on('change', function () {
        var index = $(this).val();
        $('.day-button-' + index).trigger('click');
    });

    $(document).ready(function () {
        var now = new Date(),
          secondDate = new Date(2019, 10, 9, 23, 59, 0, 0);

        if (now.getTime() > secondDate.getTime()) {
            $('.day-button-2').trigger('click');
            $('.days-dropdown-wrapper select').val(2);
        }
    });
</script>
<?php get_footer();
