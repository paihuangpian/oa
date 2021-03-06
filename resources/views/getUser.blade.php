@extends('layouts.master')

@section('content')
    <h2>基本 (<span class="origin">{{ $user->name }}</span>)</h2>
    <p>
        <span class="origin">入伍：</span>{{ date('Y-m-d', strtotime($user->created_at)) }}<span class="sep">/</span>
        <span class="origin">等级：</span>@if($user->level_id){{ \DB::table('levels')->find($user->level_id)->name }}@endif<span class="sep">/</span>
        <span class="origin">小组：</span>@if($user->group_id) {{ \DB::table('groups')->find($user->group_id)->name }} @else 未分配 @endif<span class="sep">/</span>
        <span class="origin">积分：</span><a href="">{{ $user->scores }}</a><span class="sep">/</span>
        <span class="origin">排行：</span>{{ $rank }}
        <span class="sep">/</span>
        <span class="origin">经验值：</span>{{ $user->experience }}<span class="sep">/</span>
    </p>
    <h2>战绩概览</h2>
    <p>
        <span class="origin">今日战绩：</span>{{ $today }} <span class="sep">/</span>
        <span class="origin">昨日战绩：</span>{{ $yesterday }} <span class="sep">/</span>
        <span class="origin">当月战绩: </span>{{ $current_month[0]->total }} <span class="sep">/</span>
        <span class="origin">上月战绩：</span>{{ $last_month[0]->total }} <span class="sep">/</span>
        <span class="origin">战绩累计：</span>{{ $total }}
    </p>
    <h2>战功</h2>
    <p>
        <table>
            <tr><th>战绩</th><th>时间</th></tr>
            @foreach($records as $record)
                <tr>
                    <!-- <td>{{ \DB::table('users')->find($record->user_id)->name }}</td> -->
                    <td>{{ $record->recharge }}</td>
                    <td>{{ date('Y-m-d', strtotime($record->created_at)) }}</td>
                </tr>
            @endforeach
        </table>
    </p>
@endsection
