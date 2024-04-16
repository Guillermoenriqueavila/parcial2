@extends('layouts.app')

@section('title', 'Inicio - Parcial')

@section('content')
    
    @include('layouts.navbar')

    <div>
        <h2 style="text-align:center">contamos con diferentes servicios e instalaciones</h2>
    <div class="img-container">
        <div>
            <p class="texto-categorias">Nuevas piscinas</p>
            
                <img src="https://i0.wp.com/www.hotelescancun.mx/wp-content/uploads/2021/02/Le-Blanc-Spa-Resort-hoteles-con-vista-al-mar-2.jpg?w=1512&ssl=1">
            </a>
        </div>
        <div>
            <p class="texto-categorias">Modernas Habitaciones</p>
            
                <img src="https://th.bing.com/th/id/R.7460b29a1c9c2de61bd1edf71807a41c?rik=Q7PlR8FY13kYEg&riu=http%3a%2f%2fwww.acevivillarroelbarcelona.com%2fimg%2fjpg%2fhabitaciones%2fHab-Deluxe-01.jpg&ehk=EW5fKWo2cGUBsI4%2bGEqXICEhbsWfE84kUFEw0b3gNSc%3d&risl=&pid=ImgRaw&r=0">
            </a>
            
        </div>
        <div>
            <p class="texto-categorias">nuevas instalaciones</p>
            
                <img src="https://th.bing.com/th/id/R.d0d5aa0c4f07b0c222bcbf923b3b30ea?rik=fxZ%2b8FVP090XYw&pid=ImgRaw&r=0">
            </a>
            
        </div>

    </div>



    {{--segunda fila de imagenes --}}
    
    <div>
    <div class="img-container">
        <div>
            <p class="texto-categorias">Bar</p>
            
                <img src="https://media-magazine.trivago.com/wp-content/uploads/sites/15/2016/11/21121504/barra-del-livingroom-bar-hotel-w-mexico-df.jpeg">
            </a>
        </div>
        <div>
            <p class="texto-categorias">Restaurantes</p>
            
                <img src="https://th.bing.com/th/id/R.7ccd5383606307dba898213311277d29?rik=2suj9R%2ftNTAtPw&pid=ImgRaw&r=0">
            </a>
            
        </div>
        <div>
            <p class="texto-categorias">Spa</p>
            
                <img src="https://th.bing.com/th/id/R.ca038745b3bdb397fe8ea6a3e045f478?rik=qhhZ4tsuQV3Mgw&pid=ImgRaw&r=0">
            </a>
            
        </div>




        

    </div>


    <footer>
        <div class="footer-content">
            <div class="social-links">
                <a href="#" target="_blank"><img src="https://th.bing.com/th/id/R.5a258479a41f6f43080dd7c113d68371?rik=D4EpRKLotQ7OCg&pid=ImgRaw&r=0" alt="Facebook"></a>
                <a href="#" target="_blank"><img src="data:image/jpeg;base64,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" alt="Twitter"></a>
                <a href="#" target="_blank"><img src="https://th.bing.com/th/id/OIP.a1QiySREjxPnekNsBlrnOQHaHa?w=198&h=198&c=7&r=0&o=5&pid=1.7" alt="Instagram"></a>
                <a href="#" target="_blank"><img src="data:image/jpeg;base64,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" alt="LinkedIn"></a>
            </div>
        </div>
    </footer>
    </div>





   


@endsection
