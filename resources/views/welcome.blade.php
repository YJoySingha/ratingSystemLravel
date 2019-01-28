<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">

                </div>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="row" style="text-align:center;">
                    <form method="post" action="{{url('/ratingPost')}}" id="form1">
                    @csrf
                            <label> Name:</label>
                            <input type="text" name="name" placeholder="Here is your name">

                            <input id="star1" name="star" value="1" type="radio">
                            <label for="star1"><i class="fa fa-star"></i></label>

                            <input id="star2" name="star" value="2" type="radio">
                            <label for="star2"><i class="fa fa-star"></i></label>

                            <input id="star3" name="star" type="radio" value="3">
                            <label for="star3"><i class="fa fa-star"></i></label>
                          <!-- Use <?php echo("checked") ?> to set the correct star -->
                            <input id="star4" name="star" type="radio" value="4">
                            <label for="star4"><i class="fa fa-star"></i></label>

                            <input id="star5" name="star" type="radio" value="5">
                            <label for="star5"><i class="fa fa-star"></i></label>

                            <button type="submit">Submit</button>
                    </form>
                </div>



                <div class="row" style="text-align:center;">
                    <table>
                        <tr>
                            <td>Sl.no:</td>
                            <td>Name:</td>
                            <td>Rating</td>
                        </tr>
                        <?php $i=1;  ?>
                        @foreach($ratingData as $ratingDataVar)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$ratingDataVar->r_name}}</td>
                            <td>{{$ratingDataVar->r_rating}}

                             <?php 
                                $rating = $ratingDataVar->r_rating; 
                                
                                for($i=1; $i<=5; $i++){ 

                                    if( $i <= $rating){ 

                                        echo "<i class='fa fa-star checked'></i>";

                                    }else{ 
                                        echo "<i class='fa fa-star'></i>";
                                    }
                                    
                                   
                                }

                               ?>   
                            </td>

                              

                            
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

<style>
input[type="radio"] {
  display: none;
}

label {
  display: inline-block;
}

input[type="radio"]:checked+label {
  cursor: default;
  color: red;
}

.checked{
  color:red;
}

</style>