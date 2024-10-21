
<div class="py-12 pt-4">

    <table class="datatable-init table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Date of Birth</th>
                <th>Place of birth</th>
                <th>Cellpohne No.</th>
                <th>Telephone No.</th>
                <th>House No. Street</th>
                <th>Barangay</th>
                <th>Town City</th>
                <th>Province</th>
                <th>Zip Code</th>
                <th>Length of Service</th>
                <th>Years</th>
                <th>Months</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($comaker as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['comaker_last_name'] . ', ' . $value['comaker_first_name'] . ' ' . $value['comaker_middle_name']}}</td>
                <td>{{$value['comaker_age']}}</td>
                <td>{{$value['comaker_birthdate']}}</td>
                <td>{{$value['comaker_place_of_birth']}}</td>
                <td>{{$value['comaker_cellphone_number']}}</td>
                <td>{{$value['comaker_telephone_number']}}</td>
                <td>{{$value['comaker_house_number']}}</td>
                <td>{{$value['comaker_barangay']}}</td>
                <td>{{$value['comaker_town']}}</td>
                <td>{{$value['comaker_province']}}</td>
                <td>{{$value['comaker_zip_code']}}</td>
                <td>{{$value['comaker_length_service']}}</td>
                <td>{{$value['comaker_year']}}</td>
                <td>{{$value['comaker_month']}}</td>

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
