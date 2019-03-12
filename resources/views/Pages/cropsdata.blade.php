@extends ('layouts.app')

@section ('content')
<div class="main-body">
{{-- 
    <h1 class="text1-left" style="font-size:40px;font-family: 'Montserrat', sans-serif;font-size: 40px;padding-bottom:40px;">{{$thread->ThreadSubject}}</h1> --}}
    
    <button onclick="window.history.back()"> Back </button>
    <br>
    
    <table style="border: 2px solid black">

    <?php while (key($cropsdata) != NULL){ ?>
        <tr style="border: 2px solid black">
            <td style="border: 2px solid black">
                <a href="">{{trim(key($cropsdata))}}</a>
            </td>
        
            <td style="border: 2px solid black">
                <a href="">
                
                    <?php
                    if (is_NULL($cropsdata[key($cropsdata)]))
                        echo "NULL";
                    else
                        echo trim($cropsdata[key($cropsdata)]);
                    ?>
            
                </a>
            </td>

            <?php next($cropsdata); } ?>
        
        </tr>
    </table>
    <br>

</div>
@endsection


{{-- @extends ('layouts.app')

@section('content')

<p> This is a paragraph </p>


@endsection --}}