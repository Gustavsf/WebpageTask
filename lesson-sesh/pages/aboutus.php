<div class="card pmd-card">
  <div class="pmd-tabs">
      <ul role="tablist" class="nav nav-tabs nav-fill">
        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" role="tab" aria-controls="home" href="#home-fixed">Contacts</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="profile" href="#about-fixed">What we do?</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="messages" href="#work-fixed">Why though?</a></li>
      </ul>
  </div>
  <div class="card-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home-fixed">Phone: 213213321 Adress: Riga, street 1</div>
        <div role="tabpanel" class="tab-pane" id="about-fixed">Fix refrigarators</div>
        <div role="tabpanel" class="tab-pane" id="work-fixed">Becouse I can</div>
      </div>
  </div>
</div>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>
