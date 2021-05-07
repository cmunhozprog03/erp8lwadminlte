<div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    @if ($companies->count())
                    <div class="tabel-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Celular</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $company->logo }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->phone }}</td>
                                        <td>{{ $company->mobile }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.companies.edit', $company) }}">Editar</a>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>  

                    @else 
                        <div class="card-body">
                            <strong>Nenhum registro encontrado!</strong>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
       
    </div>
</div>
