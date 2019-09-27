 
                <thead>
					<tr>
						<th>Judul</th>
						<th>Isi</th>
						<th>Author</th>
						<th>Tanggal</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryspl = mysqli_query ($connect, "SELECT id_post, post_title, post_author, post_date, post_status, SUBSTRING(post_content,1,100) as post_content FROM bramlawfirm_posts");
						if($queryspl == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}

						while ($spl = mysqli_fetch_array ($queryspl)){
							   $tanggal = $spl["post_date"];
							echo "
								<tr>
									<td>$spl[post_title]</td>
									<td>$spl[post_content]</td>
									<td>$spl[post_author]</td>";
									echo"<td>";echo date("d M Y", strtotime($tanggal)); echo"</td>";
									if ($_SESSION['id_user'] == 1 ){
							          echo " <td><button class='btn bg-green waves-effect waves-effect'>$spl[post_status]</button></td>";
							        echo "<td>
										<a href='#'><button type='button' class='btn btn-primary btn-circle waves-effect waves-circle waves-float'><i class='material-icons'>create</i></button></a>
										<a href='../controller/post/delete.php?id_post=$spl[id_post]' class='delete-link'><button type='button' class='btn bg-red btn-circle waves-effect waves-circle waves-float'><i class='material-icons'>delete</i></button></a>
									</td>";
									}else{
									  echo" <td><button class='btn bg-green waves-effectwaves-effect'>$spl[post_status]</button></td>";
									};


							echo "
								</tr>";
						}
					?>
				</tbody>
                            </table>