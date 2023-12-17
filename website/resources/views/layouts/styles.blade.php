@section('styles')
<style>
    .bg-container {
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
        position: relative;
    }

    .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); 
    }

    .center {
        z-index: 1;
    }

 
    nav.navbar {
        z-index: 2; 
    }

    .bg-container {
        background-image: url('{{$bgImage}}');
    }
</style>
@show
