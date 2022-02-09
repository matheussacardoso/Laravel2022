<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labchecap Estágio</title>
</head>

<link rel="stylesheet" type="text/css" href="{{asset('css/sb-admin-2.min.css')}}">
<body>
    <h1 class="text-center my-4">Criar conta da Empresa</h1>

    <div class="card shadow my-5 w-75 mx-auto">
        <div class="card-body">
            <form action="{{ route('auth.register.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input
                                type="text"
                                name="user[name]"
                                class="form-control"
                                placeholder="Nome"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> 
                            <input
                                type="text"
                                name="user[cnpj]"
                                class="form-control"
                                placeholder="CNPJ"
                            >
                        </div>
                    </div>
                    <div class="col-md-6">  
                        <div class="form-group">     
                            <input
                                type="text"
                                name="user[telefone]"
                                class="form-control"
                                placeholder="Telefone"
                            >
                        </div>
                    </div>
                    
                    <div class="col-md-6">  
                        <div class="form-group">     
                            <input
                                type="text"
                                name="user[cep]"
                                class="form-control"
                                placeholder="CEP"
                                value="Ignore"
                            >
                        </div>
                    </div>

                    <div class="col-12 col-md-6">  
                        <div class="form-group">     
                            <input
                                type="text"
                                name="user[endereco]"
                                class="form-control"
                                placeholder="Endereço"
                                value="Ignore"
                            >
                        </div>
                    </div>

                </div>

                <hr>

            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="form-group">
                        <input
                        type="text"
                        name="address[cep]"
                        class="form-control"
                        placeholder="CEP"
                        id="cep";
                        >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <input
                        type="text"
                        name="address[uf]"
                        class="form-control"
                        placeholder="UF"
                        id="uf"
                        >
                    </div>
                </div>
            <div class="col-md-7">
                <div class="form-group">
                    <input
                        type="text"
                        name="address[city]"
                        class="form-control"
                        placeholder="Cidade"
                        id="city"
                    >
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <input
                        type="text"
                        name="address[street]"
                        class="form-control"
                        placeholder="Logradouro"
                        id="street"
                    >
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input
                        type="text"
                        name="address[number]"
                        class="form-control"
                        placeholder="Número"
                    >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input
                        type="text"
                        name="address[district]"
                        class="form-control"
                        placeholder="Bairro"
                        id="district"
                    >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input
                        type="text"
                        name="address[complement]"
                        class="form-control"
                        placeholder="Complemento"
                    >
                </div>
            </div>
        </div>
                    <button type="submit" class="btn btn-success btn-block mt-3">
                        Criar conta
                    </button>
                </form>
            </div>
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script>
        $(document).on('blur', '#cep', function() {
            const cep = $(this).val();
            $.ajax({
                url: 'https://viacep.com.br/ws/'+cep+'/json',
                method:'GET',
                dataType: 'json',
                success: function(data){
                    //console.log(data);
                    
                    if(data.erro){
                        alert('Endereço não encontrado')
                    }
                    $('#uf').val(data.uf);
                    $('#city').val(data.localidade);
                    $('#street').val(data.logradouro);
                    $('#district').val(data.bairro);
                    
                }
            });
        });
    </script>
</body>
</html>