@extends('teacher.layouts.master')
@section('content')
        <div class="content">
           <div class="border-block">
            <h1 class="playfair font-20 font-bold text-darkblue mb-3">Revenue report</h1>
            <h2 class="font-40 font-bold text-darkblue mt-2">$1,152.84</h2>
            <p class="font-16 font-medium text-darkblue">Your Lifetime Earnings as of Jul 27, 2022 - XYZ</p>
            <table class="table line-table table-hover">
                <thead>
                    <tr>
                      <th width="250">Time Period</th>
                      <th>Earnings</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a class="text-darkblue font-bold" href="revenue-earn.html">Jul 2022</a> </td>
                      <td class="font-medium">$16.67</td>
                    </tr>
                    <tr>
                      <td><a class="text-darkblue font-bold" href="revenue-earn.html">june 2022 </a> </td>
                      <td class="font-medium">$16.67</td>
                    </tr>
                    <tr>
                      <td><a class="text-darkblue font-bold" href="revenue-earn.html">May 2022 </a> </td>
                      <td class="font-medium">$16.67</td>
                    </tr>
                    <tr>
                      <td><a class="text-darkblue font-bold" href="revenue-earn.html">Apr 2022 </td>
                      <td class="font-medium">$16.67</td>
                    </tr>
                    <tr>
                      <td><a class="text-darkblue font-bold" href="revenue-earn.html">May 2022 </a> </td>
                      <td class="font-medium">$16.67</td>
                    </tr>
                    <tr>
                      <td><a class="text-darkblue font-bold" href="revenue-earn.html">Apr 2022 </td>
                      <td class="font-medium">$16.67</td>
                    </tr>
                  </tbody>
            </table>
            <ul class="pagination justify-content-end">
                <li class="page-item">
                  <a class="page-link"><i class="bi bi-chevron-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                </li>
          </ul>
           </div>
        </div>

@endsection
