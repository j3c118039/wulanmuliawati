<!DOCTYPE html>
<html>
    <head> </head>
    <body>
        <style>


        </style>
        <!--CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        
        <div class="card"><br><br>
            <div class="card mb-4 rounded mx-auto d-block" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="../FE/orang.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Muhammad Ali</h5>
                            <p class="card-text">
                            Saat ini saya sedang menempuh pendidikan D3 Manajemen Informatika tingkat akhir di Sekolah Vokasi IPB University. 
                            Saat kuliah saya pernah mengembangkan aplikasi web, dan memahami manajemen database, serta alur dalam 
                            development app. Selain belajar, saya juga aktif mengikuti organisasi, dan menjadi relawan.
                            </p>
                            <div data-aos="fade-down"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        

        <!-- JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <script>
            $.ajax({
                url: 'https://randomuser.me/api/',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                }
            });        
        </script>
    </body>
</html>