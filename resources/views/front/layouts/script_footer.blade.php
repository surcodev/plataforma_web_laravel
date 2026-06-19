<script src="{{ asset('dist-front/js/custom.js') }}"></script>

@if($errors->any())
    {{-- iziToast apila el último toast creado en la parte superior. --}}
    @foreach(array_reverse($errors->all()) as $error)
        <script>
            iziToast.error({
                message: @json($error),
                position: 'topRight',
                timeout: 15000,
                progressBarColor: '#FF0000',
            });
        </script>
    @endforeach
@endif

@if(session('success'))
    <script>
        iziToast.success({
            message: @json(session('success')),
            position: 'topRight',
            timeout: 5000,
            progressBarColor: '#00FF00',
        });
    </script>
@endif

@if(session('error'))
    <script>
        iziToast.error({
            message: @json(session('error')),
            position: 'topRight',
            timeout: 15000,
            progressBarColor: '#FF0000',
        });
    </script>
@endif
