<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
	
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
			font-size: 14px;
			text-transform: capitalize;
		}
		.syahadah{
			font-size: 14px;
		}
		.page-break {
			page-break-after: always;
			page-break-inside: avoid;
		}
		.center {
			margin-left: auto;
			margin-right: auto;
		}
		table.table1{   
	    	border: 1px solid black;
    		border-collapse: collapse;
    
		}

		table th,td{
			border: 1px solid black;
			padding: 8px;
		}

		th.penilaian{
			border:0px;
		}

		th.pe{
			border: 0;
		}
		.jum{
			text-align: right;
		}
		th.pe3{
			border-right: 0;
		}

		th.pe2{
			border-left: 0;    
		}


		td.nilai{
			border-right: 0;
			border-bottom: 0;
			border-top:0;
		}

		td.nilai2{
			border-right: 0;
			border-left: 0;
			border-bottom: 0;
			border-top: 0;
		}

		td.nilai3{
			border-right: 0;
			border-left: 0;
			border-bottom: 0;
			border-top: 0;
		}

		td.nilai4{
			border-left: 0;
			border-bottom: 0;
			border-top: 0;
		}

		th.nilai5{
			border-right: 0;
		}

		th.nilai6{
			border-right:0 ;
		}

		th.nilai7{
			border-left: 0;
		}
		td.pop{
			border-top: 0;
			border-bottom: 0;
		}

		td.pop2{
			border-top: 0;
			border-bottom: 0;
		}
		.alignleft {
			float: left;
		}
		.alignright {
			float: right;
		}.paksatengah{
			margin-right: 19px;
		}
	</style>
	
	<div style="page-break-inside: avoid">
	
        <div>
            <p style="margin-top: 160px;margin-left: 358px" class="syahadah">No. Syahadah : {{ $p->pelatihan->id }}/2021/{{ $p->id }}</p>
        </div>
            <table 
            
            style="width: 550px; margin-left:200px"
            class="table1">
                <tr>
                        <th rowspan="2">No.</th>
                        <th rowspan="2">Bidang Penilaian</th>
                        <th colspan="3" class="penilaian">Penilaian</th>
                        <th rowspan="2" style="text-align: center">Jumlah</th>
                </tr>
                <tr>     
                    <th class="pe">Max</th>
                    <th class="pe">Min</th>
                    <th class="pe">Nilai</th>
                    
                </tr>
                <tr>
                    <th>1</th>
                    <td>&nbsp; &nbsp;<b> Al-Qur'an</b></td>
                    <th colspan="3" class="pe3"></th>
                    <th >{{ $jumlah = $p->fs + $p->tj + $p->gm + $p->sl }}</th>
                </tr>
                        @if ($p->pelatihan->program->id !== 1 )
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Fashohah</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 28 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 25 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->fs}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
    
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Tajwid</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 45 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 38 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->tj}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
    
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Ghorib Musyikilat</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 10 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 7 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->gm}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
                    
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Suara dan Lagu</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 7 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 5 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->sl}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
                        @else
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Fashohah</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 28 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 23 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->fs}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
    
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Tajwid</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 45 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 35 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->tj}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
    
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Ghorib Musyikilat</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 10 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 7 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->gm}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
                    
                        <tr>
                            <td class="pop"></td>
                            <td class="pop2" >&nbsp; &nbsp;&nbsp;<span style="text-transform: capitalize"> Suara dan Lagu</span></td>
                            <td class="nilai" style="text-align: center">&nbsp; &nbsp; 7 </td>
                            <td class="nilai2" style="text-align: center">&nbsp; &nbsp; 5 </td>
                            <td class="nilai3" style="text-align: center">&nbsp; &nbsp;{{ $p->sl}} </td>
                            <td style="border-top: 0;border-bottom: 0;"></td>
                        </tr>
                        @endif
                        
                        
                        @if ($p->pelatihan->program->id !== 1)
                        <tr>
                            <th>2</th>
                            <td class="nilai6" style="text-transform: uppercase">&nbsp; &nbsp;<b> MICRO TEACHING </b></th>
                            <th colspan="3" class="nilai5"></th>
                            <th >{{ $p->mt }}</th>
                        </tr>
                        @endif
                        @if ($p->pelatihan->program->id !== 1)
                        <tr>
                            <th></th>
                            <td class="nilai6">&nbsp; &nbsp;<b> RATA - RATA NILAI</b></th>
                            <th colspan="3" class="nilai5"></th>
                            <th >
                                @if ($pelatihan->program->id !== 1)
                                {{ $rata2 = ($jumlah+ $p->mt)/2 }}
                                @else
                                {{ $rata2 = $jumlah}}
                                @endif
                            </th>
                        </tr>
                        @else
                        <?php $rata2 = $jumlah?>
                        @endif
                
                    <tr>
                        <th></th>
                        <td class="nilai6">&nbsp; &nbsp;<b> PRESTASI</b></th>
                        <th colspan="3" class="nilai5"></th> 
                        <th >
                            @if ($rata2 >= 85)
                                Baik
                            @else
                                Cukup
                            @endif
                        </th>
                    </tr>
            </table>
                <div id="textbox" style="margin-top: 20px">
                    <div class="alignleft" style="margin-left: 200px">Baik : 80 - 95</div>
                    <div class="alignright" style="margin-right: 215px">Cukup : 70 - 79</div>
                </div>
        </div>
</body>
</html>	