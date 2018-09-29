        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	     <h3>Notifications</h3>
        <div class="col-md-12 inbox_right">
            <div class="mailbox-content">
                <table class="table">
                    <tbody>
                    <?php 
                    // var_dump($notifications);die();
                        foreach ($notifications as $notification) {
                    ?>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                <?= $notification['title']?>
                            </td>
                            <td>
                            <?= $notification['message']?>
                            </td>
                            <td>
                                <i class="fa fa-paperclip"></i>
                            </td>
                            <td class="">
                            <?= $notification['date']?>
                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
               </div>
            </div>
            <div class="clearfix"> </div>
       </div>