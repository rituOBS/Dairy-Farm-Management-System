@extends('backend.master')
@section('content')
<div class="container">
<h2>Create Employee Lists</h2>



   <form class="from" action="{{route('employee.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Employee Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="employee_name" placeholder="Enter Employee Name">
       </div>
       <div class="form-group">
           <label for="">Enter Employee Salary<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="employee_salary" placeholder="Enter Employee Salary">
       </div>
        <div class="form-group">
           <label for="">Enter Employee Workhour<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="employee_workhour" placeholder="Enter EmployeeWeight">
       </div> 
       <div class="form-group">
           <label for="">Enter Employee Designation<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="employee_designation" placeholder="Enter Employee Designation">
       </div>
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection