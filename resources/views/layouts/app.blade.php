<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
    tinymce.init({
        selector:'textarea.description',
        width: 900,
        height: 300,
        plugins: 'link',
    });

    function addCompativel() {
        var compativel = document.getElementById('compativel');
        // add row
        var row0 = document.createElement('div');
        // add title in row
        var title = document.createElement('div');
        title.innerHTML = 'Compatível com';
        title.className = 'col-md-2';
        row0.appendChild(title);

        var row = document.createElement('div');
        row.classList.add('flex', 'flex-row', 'mt-2');
        // add input
        
        // add three new inputs (nameCompativel, tipoCompativel [link ou imagem], linkCompativel [text] ou ImagemCompativel[file])
        var nameCompativel = document.createElement('input');
        nameCompativel.setAttribute('type', 'text');
        nameCompativel.setAttribute('name', 'nameCompativel[]');
        nameCompativel.setAttribute('placeholder', 'Nome do Compatível');
        nameCompativel.setAttribute('class', 'form-control');
        nameCompativel.classList.add('w-1/4', 'mr-2');
        nameCompativel.setAttribute('style', 'margin-bottom: 10px;');
        row.appendChild(nameCompativel);

        var tipoCompativel = document.createElement('select');
        tipoCompativel.setAttribute('name', 'tipoCompativel[]');
        tipoCompativel.setAttribute('class', 'form-control');
        tipoCompativel.classList.add('w-1/4', 'mr-2');
        tipoCompativel.setAttribute('style', 'margin-bottom: 10px;');
        //onCHange chamar função para mostrar o input certo
        tipoCompativel.setAttribute('onchange', 'showCompativel(this)');

        row.appendChild(tipoCompativel);

        var optionLink = document.createElement('option');
        optionLink.setAttribute('value', 'link');
        // selected
        optionLink.setAttribute('selected', 'selected');
        optionLink.innerHTML = 'Link';

        tipoCompativel.appendChild(optionLink);

        var optionImagem = document.createElement('option');
        optionImagem.setAttribute('value', 'imagem');
        optionImagem.innerHTML = 'Imagem';
        tipoCompativel.appendChild(optionImagem);

        // var linkCompativel = document.createElement('input');
        // linkCompativel.setAttribute('type', 'text');
        // linkCompativel.setAttribute('name', 'linkCompativel[]');
        // linkCompativel.setAttribute('placeholder', 'Link do Compatível');
        // linkCompativel.setAttribute('class', 'form-control');
        // linkCompativel.classList.add('w-1/4', 'mr-2');
        // linkCompativel.setAttribute('style', 'margin-bottom: 10px;');
        // row.appendChild(linkCompativel);

        //linkCompativel select com todos os produtos cadastrados
        var linkCompativel = document.createElement('select');
        linkCompativel.setAttribute('name', 'linkCompativel[]');
        linkCompativel.setAttribute('class', 'form-control');
        linkCompativel.classList.add('w-1/4', 'mr-2');
        linkCompativel.setAttribute('style', 'margin-bottom: 10px;');
        row.appendChild(linkCompativel);

        var option = document.createElement('option');
        option.setAttribute('value', '');
        option.innerHTML = 'Selecione um produto';
        linkCompativel.appendChild(option);

        // get produtos from api /api/produtos
        fetch('/api/produtos')
        .then(response => response.json())
        .then(data => {
            data.forEach(element => {
                var option = document.createElement('option');
                option.setAttribute('value', element.id);
                option.innerHTML = element.titulo;
                linkCompativel.appendChild(option);
            });
        });

        var ImagemCompativel = document.createElement('input');
        ImagemCompativel.setAttribute('type', 'file');
        ImagemCompativel.setAttribute('name', 'ImagemCompativel[]');
        ImagemCompativel.setAttribute('class', 'form-control');
        ImagemCompativel.classList.add('w-1/4', 'mr-2');
        // default not display
        ImagemCompativel.setAttribute('style', 'display: none; margin-bottom: 10px;');
        row.appendChild(ImagemCompativel);
        
        // select para grupo com opcoes (Perfil, Acabamento, Puxador, Sistema, Divisor)
        var grupo = document.createElement('select');
        grupo.setAttribute('name', 'grupo[]');
        grupo.setAttribute('class', 'form-control');
        grupo.classList.add('w-1/4', 'mr-2');
        grupo.setAttribute('style', 'margin-bottom: 10px;');
        row.appendChild(grupo);
        
        var optionPerfil = document.createElement('option');
        optionPerfil.setAttribute('value', 'perfil');
        optionPerfil.innerHTML = 'Perfil';
        grupo.appendChild(optionPerfil);

        var optionAcabamento = document.createElement('option');
        optionAcabamento.setAttribute('value', 'acabamento');
        optionAcabamento.innerHTML = 'Acabamento';
        grupo.appendChild(optionAcabamento);

        var optionPuxador = document.createElement('option');
        optionPuxador.setAttribute('value', 'puxador');
        optionPuxador.innerHTML = 'Puxador';
        grupo.appendChild(optionPuxador);

        var optionSistema = document.createElement('option');
        optionSistema.setAttribute('value', 'sistema');
        optionSistema.innerHTML = 'Sistema';
        grupo.appendChild(optionSistema);

        var optionDivisor = document.createElement('option');
        optionDivisor.setAttribute('value', 'divisor');
        optionDivisor.innerHTML = 'Divisor';
        grupo.appendChild(optionDivisor);



        // REMOVE
        var remove = document.createElement('button');
        remove.setAttribute('type', 'button');
        remove.setAttribute('class', 'btn btn-danger');
        remove.setAttribute('onclick', 'removeCompativel(this)');
        remove.innerHTML = 'Remover';
        row.appendChild(remove);

       

        compativel.appendChild(row0);
        compativel.appendChild(row);
    }

    function showCompativel(tipoCompativel) {
        var row = tipoCompativel.parentNode;
        var linkCompativel = row.children[2];
        var ImagemCompativel = row.children[3];
        if (tipoCompativel.value == 'link') {
            linkCompativel.setAttribute('style', 'display: block; margin-bottom: 10px;');
            ImagemCompativel.setAttribute('style', 'display: none; margin-bottom: 10px;');
        } else {
            linkCompativel.setAttribute('style', 'display: none; margin-bottom: 10px;');
            ImagemCompativel.setAttribute('style', 'display: block; margin-bottom: 10px;');
        }
    }

    function removeCompativel(remove) {
        // remove row0
        var row0 = remove.parentNode.previousSibling;
        row0.remove();
        // remove row
        var row = remove.parentNode;
        var compativel = row.parentNode;
        compativel.removeChild(row);


    }
    </script>    

</html>
