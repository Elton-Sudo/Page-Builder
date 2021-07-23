<html data-theme="dark">
<head>
<title>Farm</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link id='skin' rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gridstack@4.2.6/dist/gridstack-h5.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/gridstack@4.2.6/dist/gridstack.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../reports/charts.css">
<style>
    .grid-stack.dark {
        background: #141e25;
    }
    .grid-stack.light {
        background: #edf0f3;
    }
    .grid-stack-item-content:hover{
        border: 1px teal dashed;
    }
    .endpointkbd{
        padding: 5px;
        border: 1px solid grey;
        margin: 2px;
        display: inline-block;
        color: gray;
    }
    #custombutton{
        cursor: pointer;
    }
    .grid-stack-item-content {
        overflow-y: hidden !important;
    }
    .grid-stack-item-content:hover {
        overflow-y: auto !important;
    }
    .cssselector{
        height: 37px;
        line-height: 0px;
        font-size: 20px;
        padding: 5px;
        min-width: 150px;
    }
    .bdark{
        background-color: white;
        color: black;
    }
    .blight{
        background-color: black;
        color: white;
    }
</style>
</head>
<body>
    <main class="container-fluid" style="padding-top: 5px;">
        <h1>The FARM</h1>
        <div class='endcontainer' style="display: none">
            <div id='endpoitslist'>
                <kbd class="endpointkbd" data-url=''>Add api end-point</kbd>
                <kbd class="endpointkbd" data-html='<p>Sed ultricies dolor non ante vulputate hendrerit. Vivamus sit amet suscipit sapien. Nulla iaculis eros a elit pharetra egestas.</p>'>P</kbd>
                <kbd class="endpointkbd" data-html='<input type="text" name="firstname" placeholder="First name" aria-label="First name" required>'>input</kbd>
                <kbd class="endpointkbd" data-html='<h2>Heading 2</h2>'>Heading 2</kbd>
                <kbd class="endpointkbd" data-html='<blockquote>"Maecenas vehicula metus tellus, vitae congue turpis hendrerit non. Nam at dui sit amet ipsum cursus ornare."<footer><cite>- Phasellus eget lacinia</cite></footer></blockquote>'>blockquote</kbd>
                <kbd class="endpointkbd" data-html='<ul><li>Aliquam lobortis lacus eu libero ornare facilisis.</li><li>Nam et magna at libero scelerisque egestas.</li><li>Suspendisse id nisl ut leo finibus vehicula quis eu ex.</li><li>Proin ultricies turpis et volutpat vehicula.</li></ul>'>List</kbd>
                <kbd class="endpointkbd" data-html='<figure><img src="https://source.unsplash.com/a562ZEFKW8I/2000x1000" alt="Minimal landscape"><figcaption>Image from <a href="https://unsplash.com">unsplash.com</a></figcaption></figure>'>Image</kbd>
                <kbd class="endpointkbd" data-html='<button>Primary</button>'>button</kbd>
                <kbd class="endpointkbd" data-html='<figure> <table role="grid"> <thead> <tr> <th scope="col">#</th> <th scope="col">Heading</th> <th scope="col">Heading</th> <th scope="col">Heading</th> <th scope="col">Heading</th> <th scope="col">Heading</th> <th scope="col">Heading</th> <th scope="col">Heading</th> </tr></thead> <tbody> <tr> <th scope="row">1</th> <td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td></tr><tr> <th scope="row">2</th> <td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td></tr><tr> <th scope="row">3</th> <td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td></tr></tbody> </table> </figure>'>Table</kbd>
                <kbd class="endpointkbd" data-html='<form><input type="text" placeholder="Example"><button type="submit">Example</button></form>'>Form</kbd>
                <kbd class="endpointkbd" data-html='<label for="search">Search</label><input type="search" id="search" name="search" placeholder="Search">'>Search</kbd>
                <kbd class="endpointkbd" data-html='xxx'>xxx</kbd>
                <kbd class="endpointkbd" data-html='xxx'>xxx</kbd>
                <kbd class="endpointkbd" data-html='xxx'>xxx</kbd>
                <kbd class="endpointkbd" data-html='xxx'>xxx</kbd>
                <kbd class="endpointkbd" data-html='xxx'>xxx</kbd>
                <kbd class="endpointkbd" data-html='xxx'>xxx</kbd>
                <kbd class="endpointkbd" data-html='xxx'>xxx</kbd>
            </div>
        </div>
        <div class="row" style="display:flex">
            <div id="trash" style="padding: 5px; margin-bottom: 15px;" class="text-center">
                <div>
                    <kbd style="background-color: tomato">Drop here to remove!</kbd>
                </div>
            </div>
            <div class="newWidget grid-stack-item">
                <div class="grid-stack-item-content dashed" style="padding: 5px;">
                    <div>
                        <kbd class='clickme'>Drag me in the panel! Then Double Click me</kbd>
                    </div>
                </div>
            </div>
            <div id="custombutton" style="padding: 5px; margin-bottom: 15px;" class="text-center">
                <div>
                    <kbd style="background-color: green">Custom HTML</kbd>
                </div>
            </div>
            <div id="csschanger" style="padding: 5px; margin-bottom: 15px;" class="text-center">
                <div>
                    <select id='cssselector' class='cssselector'>
                        <option value="https://unpkg.com/@picocss/pico@latest/css/pico.min.css" selected="selected">Pico</option>
                        <option value="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">Water</option>
                    </select>
                </div>
            </div>
            <div  style="padding: 5px; margin-bottom: 15px;" class="text-center">
                <div>
                    <kbd id="lightswitch" class="bdark" style="cursor: pointer">Light</kbd>
                </div>
            </div>
        </div>
        <div class="row" style="display:flex">
            <textarea name="" id="customblock" cols="30" rows="10" style="width:100%; margin:5px;height:100px;"></textarea>
        </div>
        <div class="row">
            <div class="grid-stack" style="padding: 5px; min-height: 200px;">

            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="sheep.js"></script>

        <script type="text/javascript">
        let grid = GridStack.init({
            cellHeight: 10,
            acceptWidgets: true,
            dragIn: '.newWidget',  // class that can be dragged from outside
            dragInOptions: { revert: 'invalid', scroll: false, appendTo: 'body', helper: 'clone' }, // clone or can be your function
            removable: '#trash', // drag-out delete class
        });
        $( document ).ready(function() {
            $('body').on('dblclick','.grid-stack .clickme',function(){
                var endlist=$('#endpoitslist').html();
                $(this).parent().html(endlist);
                //sheepProgressContentLoader();
            });
            $('body').on('dblclick','.endpointkbd',function(){
                var endlist=$(this).attr('data-url');
                if (endlist){
                    $(this).parent().html("<progress data-url='"+endlist+"'></progress>");
                }
                sheepProgressContentLoader();
                var endhtml=$(this).attr('data-html');
                if (endhtml){
                    $(this).parent().html(endhtml);
                }
            });
            $('body').on('click','#custombutton',function(){
                var html=$('#customblock').val();
                grid.addWidget({w: 2,h:50, content: html});
                sheepProgressContentLoader();
            });
            $('body').on('click','#lightswitch',function(){
                if ($(".grid-stack").hasClass("light")) {
                    $(".grid-stack").removeClass("light");
                    $(".grid-stack").addClass("dark");
                    $("#lightswitch").removeClass("blight");
                    $("#lightswitch").addClass("bdark");
                }
                else{
                    $(".grid-stack").removeClass("dark");
                    $(".grid-stack").addClass("light");
                    $("#lightswitch").removeClass("bdark");
                    $("#lightswitch").addClass("blight");
                }
            });
            $('body').on('change','#cssselector',function(){
                var css=$('#cssselector').val();
                $('#skin').remove();
                $('#cssselector').removeClass("cssselector");
                $('head').append("<link id='skin' rel='stylesheet' href='"+css+"'>");
            });
        });
        /*
            var custom="<progress data-url='https://www.bay.one/sheep.php?action=frozen&key=ccccc4e1tt2ce'></progress>";
            grid.addWidget({w: 2,h:50, content: custom});
            sheepProgressContentLoader();
        */
        </script>
        <script src="http://154.66.197.53/sub/ship/js/jquery.canvasjs.min.js"></script>
    </main>
</body>
</html>
