<style>
    .content-home {
        height: 93vh;
    }

    .follow-to-projects {
        height: 7vh;
    }

    .follow-to-projects a i {
        font-size: 40px;
    }
</style>

<div class="d-flex justify-content-center align-items-center bg-dark content-home">
    <div>
        <img alt="Imagem de perfil" class="rounded-circle mx-auto d-block w-25"
             src="{{ asset('storage/profile_photo.svg') }}">
        <div class="text-center text-white my-3">
            <h1>Diego Ramos Gomes</h1>
            <p>Back-end / Mobile developer</p>
        </div>
        <ul class="list-inline text-center">
            <li class="list-inline-item">
                <a target="_blank" href="https://www.instagram.com/dihrgomes/" class="text-white">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a target="_blank" href="https://github.com/DiegoRamosGomes/" class="text-white">
                    <i class="fa fa-github"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a target="_blank" href="https://api.whatsapp.com/send?phone=5548991417009" class="text-white">
                    <i class="fa fa-whatsapp"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a target="_blank" href="mailto:diegoramosgomes5@gmail.com" class="text-white">
                    <i class="fa fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="bg-dark text-center follow-to-projects">
    <a href="#projects" class="text-white" id="scrollToProjects">
        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
    </a>
</div>

<script>
    $("#scrollToProjects").on('click', function () {
        $('html, body').animate({
            scrollTop: $("#projects").offset().top
        }, 2000);
    });
</script>
