<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Tel/Cell No</th>
                <th>Complete Address</th>
                <th>Questions Asked</th>
                <th>Response</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($informants as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['informants_name']}}</td>
                <td>{{$value['informants_phone_number']}}</td>
                <td>{{$value['informants_address']}}</td>
                <td>{{$value['informants_questions']}}</td>
                <td>{{$value['informants_response']}}</td>

                <td>
                    <button class="btn btn-xs btn-light}">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                        <button type="submit" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
