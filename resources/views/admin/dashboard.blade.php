@extends('admin.layouts.app')

@section('content')



{{--<div class="container-fluid">
    <div class="row" style="margin-top:10px;padding-bottom:50px;background-color:#343A40;">
        <h3 style="padding: 10px 350px;">إحصائيات العقارات لعام {{ date("Y") }}</h3>
        <div class="col-md-12">
            {!! $estateAddingByMonth->container() !!}
        </div>
    </div>
    <div class="row" style="margin-top:-50px;">
        <div class="col-md-4 my-3">
            <div class="bg-mattBlackLight p-3" style="border-radius:8px;">
              <h4 class="mb-2 text-center">المستخدمين لعام {{ date("Y") }}</h4>
              <div>{!! $usersByMonth->container() !!}</div>
            </div>
        </div>

        <div class="col-md-4 my-3">
          <div class="bg-mattBlackLight p-3" style="border-radius:8px;">
            <h4 class="mb-2 text-center">المكاتب العقارية لعام {{ date("Y") }}</h4>
            <div>{!! $officesByMonth->container() !!}</div>
          </div>
        </div>

      <div class="col-md-4 my-3">
        <div class="bg-mattBlackLight p-3" style="border-radius:8px;">
          <h4 class="mb-2 text-center">المحامين لعام {{ date("Y") }}</h4>
          <div>{!! $lawyersByMonth->container() !!}</div>
        </div>
      </div>

    </div>


    <div class="row">
        <div class="col-md-3">
          <div class="card-counter primary">
            <i class="material-icons icon">person</i>
            <span class="count-numbers">{{ $countEstates }}</span>
            <span class="count-name">عدد العقارات</span>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card-counter danger">
            <i class="material-icons icon">track_changes</i>
            <span class="count-numbers">{{ $countUsers }}</span>
            <span class="count-name">عدد المستخدمين</span>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card-counter info">
            <i class="material-icons icon">collections</i>
            <span class="count-numbers">{{ $countOffices }}</span>
            <span class="count-name">عدد المكاتب العقارية</span>
          </div>
        </div>
            
        <div class="col-md-3">
          <div class="card-counter success">
            <i class="material-icons icon">content_copy</i>
            <span class="count-numbers">{{ $countLawyers }}</span>
            <span class="count-name">عدد المحامين</span>
          </div>
        </div>
    
      </div>
    

    
    <div class="row">
      <div class="col-md-6 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2 text-center">مدة الإعلانات المثبتة</h4>
            <div>{!! $countPremiumChart->container() !!}</div>
          </div>
      </div>

      <div class="col-md-6 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2 text-center">مدة الإعلانات المضافة</h4>
          <div>{!! $countDurationChart->container() !!}</div>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-4 my-3">
          <div class="bg-mattBlackLight p-3">
            <h4 class="mb-2 text-center">نوع العرض</h4>
            <div>{!! $countOfferChart->container() !!}</div>
          </div>
      </div>

      <div class="col-md-4 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2 text-center">النوع</h4>
          <div>{!! $countSortChart->container() !!}</div>
        </div>
      </div>

      <div class="col-md-4 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2 text-center">أعلى المستخدمين إضافة</h4>
          <div>{!! $topFiveUsersChart->container() !!}</div>
        </div>
      </div>

      
    </div>



    <div class="row">
     

      <div class="col-md-6 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2 text-center">نوع الإعلان</h4>
          <div>{!! $countCategoryChart->container() !!}</div>
        </div>
      </div>


      <div class="col-md-6 my-3">
        <div class="bg-mattBlackLight p-3">
          <h4 class="mb-2 text-center">نوع العقار</h4>
          <div>{!! $countAdSortChart->container() !!}</div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="card-counter success">
          <i class="material-icons icon">person</i>
          <span class="count-numbers">{{ $countVisitors }}</span>
          <span class="count-name">عدد الزوار</span>
        </div>
      </div>

      <div class="col-md-6">
       
      </div>


        <div class="col-md-6">
          <div class="card-counter danger">
            <i class="material-icons icon">track_changes</i>
            <span class="count-numbers">{{ $countClicks }}</span>
            <span class="count-name">عدد النقرات</span>
          </div>
        </div>

      
     

      <div class="col-md-6">
        <table class="table table-striped table-dark" style="margin-top:-105px;height:325px;">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">IP</th>
                  <th scope="col">الدولة</th>
                  <th scope="col">عدد النقرات</th>
              </tr>
          </thead>
          @foreach ($allVisitors as $visitor)
          <tbody>
              <td scope="row">#</td>
              <td>{{ $visitor->ip  }}</td>
              <td>{{ $visitor->country }}</td>
              <td>{{  floor($visitor->clicks/2) }}</td>
          </tbody>
          @endforeach
        </table>
      </div>
      
    </div>
  

</div>--}}

<div class="container-fluid">
  
</div>

@endsection

@section('footer')

{{--{!! $estateAddingByMonth->script() !!}
{!! $usersByMonth->script() !!}
{!! $officesByMonth->script() !!}
{!! $lawyersByMonth->script() !!}
{!! $countPremiumChart->script() !!}
{!! $countDurationChart->script() !!}
{!! $countSortChart->script() !!}
{!! $countAdSortChart->script() !!}
{!! $countOfferChart->script() !!}
{!! $countCategoryChart->script() !!}
{!! $topFiveUsersChart->script() !!}--}}

@endsection