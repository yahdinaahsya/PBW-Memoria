@extends('layout.app')

@section('content')

<p>HALOOO, INI kalender ^_^</p>
<div class = "container">
  <div class="left">
    <div class="calendar">
      <div class="month">
        <i class="fas fa-angle-left prev"></i>
        <div class="date">december 2015</div>
        <i class="fas fa-angle-right next"></i>
      </div>

      <div class="weekdays">
        <table class = "hari">
          <thead>
            <tr>Sun</tr>
            <tr>Mon</tr>
            <tr>Tue</tr>
            <tr>Wed</tr>
            <tr>Thu</tr>
            <tr>Fri</tr>
            <tr>Sat</tr>
          </thead>
        </table>
    </div>
  </div>

</div>

@endsection