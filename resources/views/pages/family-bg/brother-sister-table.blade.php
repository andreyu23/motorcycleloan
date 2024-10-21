
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
        <tr>
            <th>#</th>
            <th>Brothers/Sisters Name</th>
            <th>Age</th>
            <th>Adress</th>
            <th>Occupation</th>
            <th>Company</th>
            <th>Length of Service</th>



                <th width="100" class="text-center"> Action </th>
            </tr>

        </thead>
        <tbody>
            @foreach ($brosis as $value)
        @csrf
        <tr>
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['bro_sis_name']}}</td>
                <td>{{$value['bro_sis_age']}}</td>
                <td>{{$value['bro_sis_address']}}</td>
                <td>{{$value['bro_sis_work']}}</td>
                <td>{{$value['bro_sis_company']}}</td>
                <td>{{$value['bro_sis_length_service']}}</td>


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
