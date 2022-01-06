<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>


    <div class="container-fluid">
        <div class="row" style= color: white;">
            <div class="col-md-3"></div>
            <div class="col-md-4">
@foreach($errors->all() as $error)
<h1>{{@error}})</h1>
@endforeach
@if(session::get('succesMsg'))
<?php session::forget('successMsg');
@endif
            </div>
            <div class="col-md-4">

            </div>












<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1"><h2>Users <b></b></h2></div>
                    <div class="col-sm-7"><Button data-toggle="modal" data-target="#Modal_add" class="btn btn-primary">Add</Button></div>
                    <div class="col-sm-4">
                        <div class="search-box">

                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>


                        <td>
                            <a href="#" class="text-warning"  data-toggle="tooltip" data-toggle="modal" data-target="#Modal_update">Update</a>
                            <a href="#" class="text-danger"  data-toggle="tooltip" >Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>







<!-- Modal-Add -->
<div class="modal fade" id="Modal_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="POST" action="/add">
            @crsf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <h5> Question</h5>

        </div>
        <div class="row">
            <input name="question" class="form-control"></div>
        <div class="row">
          <div class="col-md-6"><label > A:</label></div>
          <div class="col-md-6"><label> B:</label></div>


      </div>
      <div class="row">
        <div class="col-md-6"><input name="opa"></div>
        <div class="col-md-6"><input name="opa"></div>

      </div>
      <div class="row">
        <input name="question" class="form-control"></div>
    <div class="row">
      <div class="col-md-6"><label > s:</label></div>
      <div class="col-md-6"><label> D:</label></div>


  </div>
  <div class="row">
    <div class="col-md-6"><input name="opc"></div>
    <div class="col-md-6"><input name="opd"></div>

  <div class="row">
  <div class="col-md-3" ><label>Answer</label>
    <select name="ans" class="form-control">
        <option value="a">A</option>
        <option value="b">b</option>
        <option value="c">c</option>
        <option value="d">d</option>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>




