<?php
	use App\config;

	$config = new config;
?>

<tr>
	<td>{{{  $day->user->name  }}}</td>
	<td>{{{  date('Y-m-d',$day->time_in_stamp)  }}}</td>
	<td>{{{  date('D',$day->time_in_stamp)  }}}</td>
	<td>{{{  date('H:i',$day->time_in_stamp)  }}}</td>
	<td>{{{  date('H:i',$day->time_out_stamp)  }}}</td>
	<td>{{{  $config->secondsToHoursAndMinsString($day->time_unproductive)  }}}</td>
	<td>{{{  $config->secondsToHoursAndMinsString($day->time_worked)  }}}</td>

	@if($detail == 1)
		<td><div class="btn daySummaryBreakdownBtn userLoggedOff" method="daySummarySingleRow" target="{{{ $day->id }}}">&#9663;</div></td>
	@else
		<td><div class="btn daySummaryBreakdownBtn" method="daySummaryBreakdown" target="{{{ $day->id }}}">&#9667;</div></td>
	@endif
</tr>