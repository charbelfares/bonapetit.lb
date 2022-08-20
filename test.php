<html>
    <head><style>
    .filterButton {
  margin-left: 43px;
  border-radius: 0;
  background-clip: padding-box;
  border: 2px solid rgba(0, 0, 0, 0.2);
  background-position: 50% 50%;
  cursor: pointer;
  text-align: center;
  background-color: #fff;
  padding: 3px;
 }

 .fa-filter:hover  {
   color: #5690C6;
 }

 .fa-filter {
  color: #1770a6;
  font-size: 21px;
  padding-left: 4px;
  padding-right: 4px;
  align-content: center;
 }

 .menu, .menuContent {
   display: inline;
  }
</style>
</head>
<body>
<div class="filterButton leaflet-control">
     <span><i class="fa fa-filter fa-7x"></i>
      <label class="menu">District: </label>
      <select class="ml-1 menuContent" name="zipcode" [(ngModel)]="zipcode" (ngModelChange)="selectedZipcode()">
        <option>-All-</option>
        <option *ngFor="let zipcode of artworkList | duplicates ">{{zipcode}}</option>
      </select>
    </span>

  </div>
</body>
  </html>