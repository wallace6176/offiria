<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
	<tr>
		<td valign="top" style="background:#f9f9f9;font-size:14px;" width="50" >
			<img src="<?php echo $actor->getThumbAvatarURL();?>" alt="logo" style="display:block;border:3px solid #ffffff;outline:1px solid #ccc;margin:20px 0 0 20px;" width="50" height="50" /> 
		</td>
		<td valign="top" style="background:#f9f9f9;font-size:14px;" width="10" >
			<div style="width:0;min-height:0;border-width:8px;border-style:solid;border-color:#f8fafb #3ea7af #f8fafb #f8fafb;margin-top:35px;"></div>
		</td>

		<td valign="middle" style="background:#f9f9f9;font-size:14px;" width="548" >		
			<div id="topic" style="background:#3ea7af;padding:10px;color:#fefefe;display:block;margin:20px 20px 5px 0;">
				<p style="padding:0;margin:0;font-style:italic;font-family:georgia,serif;">&#8220; <?php echo StreamMessage::formatShortDisplay($messageTable->get('message'), $linkOption);?> &#8221;</p>			
			</div>
			<p style="margin:0;padding:0;font-size:13px;color:#777;"><?php echo JText::sprintf('COM_STREAM_POST_DETAIL', $actor->get('name'), $actor->get('designation'), JXDate::formatDate( $date, $formatDateShort ));?></p>
		</td>
	</tr>