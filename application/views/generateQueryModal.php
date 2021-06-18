<div id="generateQueryModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Generate Query</h4>
      </div>
      <div class="modal-body" style="padding: 25px;">
      
      <form>
      <center>
      <div class="btn btn-success success-msg" style="display: none">Your Query Added Successfully</div>
      <div class="btn btn-danger fail-msg" style="display: none;width: 50%;">Something went wrong</div>
      <div style="display: none;" class="loader"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></div>

      </center><br />

      <div class="row">
        <div class="col-md-3">
          <label>Your Query</label>
        </div>
        <div class="col-md-8">
          <textarea cols="15" rows="3" name="query" id="query"></textarea>
        </div>
      </div>
      <input type="hidden" name="" id ="tablename">
      <input type="hidden" name="" id ="noticeid">
      </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" name="" id="submitQuery">Submit Query</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
$("#submitQuery").click(function(e){
  e.preventDefault();

  var base_url = window.location.origin;

  var id        =  $("#noticeid").val();
  var tablename =  $("#tablename").val();
  var query     =  $("#query").val();

  $(".loader").show();

  $.ajax({
        url: base_url+"/User/submitQuery",
        type: "post",
        data:{'id':id,'tablename':tablename,'query':query},
        success: function (response) {
         if( response==1 || response== '1' ){
            $(".loader").show();
            setTimeout(function(){ 
              window.location.href = base_url+"/index.php/User/userHome"
               }, 1000);
            $(".loader").hide();
            $(".success-msg").show();
            $(".fail-msg").hide();

          }else{

            $(".loader").hide();
            $(".success-msg").hide();
            $(".fail-msg").show();
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });

  



})



</script>


<!-- 


function car(){

var color;
var price;

function maruti(){

console.log(color,price);

  
}

  


}


car(1)




this.state = { name: 'Prabal' } this.setState({ name: 'Gupta' }); 
console.log(this.state.name); 
this.setState({ name: 'Gupta' }, () => console.log(this.state.name)); 




console.log('a') 
setTimeout(() => console.log("b"), 0) console.log("c"); 
const a = {'name': 'Prabal'} 
var a = {name: 'Prabal'} var b = a; b.name = "gupta" console.log(a) 
conosole.log(b) 
var a =10; if(true){ let a = 20; } const a = 30; console.log(a); 


Namaste Javascript


-->