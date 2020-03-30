                                                @foreach($res as $v)
													<tr>
														<td>{{$v->client_id}}</td>
														<td>{{$v->client_name}}</td>
														<td>{{$v->client_rank}}</td>
														<td>{{$v->client_origin}}</td>
														<td>{{$v->account_name}}</td>
														<td>{{$v->client_tel}}</td>
														<td>{{$v->client_tels}}</td>
														<td>
															<button class="btn" ><a href="{{url('/client/edit/'.$v->client_id)}}">编辑</a></button>
															<button  class="btns btn-danger" client_id={{$v->client_id}} >删除</button>
														</td>
													</tr>																					
												@endforeach	
                                              