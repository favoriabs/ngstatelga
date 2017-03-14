<!DOCTYPE html>
<head>
  <title> </title>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
  </script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container-fluid">
          <div class="row">
              <div class="col-md-8">
                  <div class="card">
                      <form id="loginFormValidation" action="#" method="post">
                          <div class="header text-center">View</div>
                          <div class="content">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">State <star>*</star></label>
                                          <select class="form-control" name="state" id="state_dropdown">
                                              <option value="">Select State</option>
                                              @foreach($states as $state)
                                                  <option value="{{$state->id}}">{{$state->name}}</option>
                                              @endforeach
                                          </select>
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="control-label">Local Govt <star>*</star></label>
                                          <select name="lga" class="form-control" id="lga_dropdown">
                                              <option> Selected</option>
                                              @foreach ($lgas as $lga)
                                                  <option value=""> </option>
                                              @endforeach
                                          </select>
                                      </div>
                                  </div>
                              </div>

                              <input type="hidden" name="_token" id="_token" value="{{{ csrf_token() }}}" />
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

<script>
$(function() {
          var stateiD = $('#state_dropdown').val();
          var updateStateDropdown = function() {
              if ($('#state_dropdown').val() == '') {
                  $('#lga_dropdown').prop('disabled', true);
              } else {
                  $('#lga_dropdown').prop('disabled', false);
              }
          };
          updateStateDropdown();

          // csrf token
          var token = $('#_token').val();

          $('#state_dropdown').change(function() {
              console.log($('#state_dropdown').val());
              updateStateDropdown();

              $.ajax({
                  "type":"POST",
                  "url": "ngstatelga/ajax",
                  "data": {
                      "_token": token,
                      "state": $('#state_dropdown').val(),
                  },
                  success: function(data) {
                      $('#lga_dropdown').empty();
                      $.each(data, function(i, lga) {
                          $('#lga_dropdown').append($("<option>").text(lga['name']).attr('value', lga['id']));

                      });
                      console.log($('#lga_dropdown').val());
                      updateStateDropdown();
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                      console.log(xhr.responseText);
                  }
              });
          });
      });
</script>
</body>

</html>
