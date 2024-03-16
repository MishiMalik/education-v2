<div>



    <div class="card  pb-4 px-lg-4 px-2">
    <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-start py-3 mt-2">
                                    <h5 class="card-header px-0 bg-white border-bottom-0 py-0   mb-md-2 mb-3">Today
                                        Appointments</h5>


                                </div>  <div class="blushed-card mb-3">
                                    <div class="table-responsive">
        <table id="inquiry" class="table  nowrap border-0 " style="width:100%">
            <thead>
                <tr class="dt-head">

                    <th>#</th>
                    <th>Today Date</th>
                    <th>Time</th>
                    <th>Meeting Type</th>
                    <th>Std Name </th>
                    <th> Number</th>
                    <th> Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($new_students as $key => $student)
                <tr class="">
                    <td class="">{{$key+1}}</td>
                    <td>{{$student->Date}}</td>
                    <td>{{$student->time}}</td>
                    <td>{{$student->Meeting_type}}</td>

                    <td class="">{{$student->Student_name}}</td>
                    <td class="">{{$student->Student_contact}}</td>
                    <td class="">{{$student->Student_email}}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary btn-xs" wire:click="confirmDelete({{$student->id}})">Waste On</button>
                            <button class="btn btn-primary btn-xs ms-2" wire:click="updateRecord({{$student->id}})">Transfer to Data</button>
                       </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
                                    </div>

                                </div>
                                </div>

<div class="card  pb-4 px-lg-4 px-2 mt-3">
    <!-- <h5 class="card-header px-0 bg-white border-bottom-0  py-3 mb-2">All Appointments</h5> -->
    <div
                                    class="d-flex flex-md-row flex-column justify-content-between align-items-start py-3 mt-2">
                                    <h5 class="card-header px-0 bg-white border-bottom-0 py-0   mb-md-2 mb-3">
                                        Appointments</h5>
                                    <div class=" w-auto mb-2 d-flex align-items-center">
                                        <select class="form-select form-select-md w-100" style="min-width: 160px;">
                                            <option selected>Select Date</option>
                                            <option value="">12/5/20224</option>
                                            <option value="">11/5/2024</option>
                                            <option value="">10/5/2024</option>
                                        </select>
                                        <button class="btn btn-primary ms-3">Search</button>
                                        <button class="btn bg-gray text-white  ms-3">Reset</button>
                                    </div>

                                </div>
    <div class="table-responsive">
   <input type="search" class="form-control ps-4 mb-4" wire:model="search" placeholder="Search...">
        <table class="table  nowrap border-0 " style="width:100%">
            <thead>
                <tr class="dt-head">

                    <th>#</th>
                    <th> Date</th>
                    <th>Time</th>
                    <th>Meeting Type</th>
                    <th>Std Name </th>
                    <th> Number</th>
                    <th> Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                <tr class="">
                    <td class="">{{$key+1}}</td>
                    <td>{{$student->Date}}</td>
                    <td>{{$student->time}}</td>
                    <td>{{$student->Meeting_type}}</td>
                    <td class="">{{$student->Student_name}}</td>
                    <td class="">{{$student->Student_contact}}</td>
                    <td class="">{{$student->Student_email}}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary btn-xs" wire:click="confirmDelete({{$student->id}})">Waste On</button>
                            <button class="btn btn-primary btn-xs ms-2" wire:click="updateRecord({{$student->id}})">Transfer to Data</button>
                       </div>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>
</div>
</div>
