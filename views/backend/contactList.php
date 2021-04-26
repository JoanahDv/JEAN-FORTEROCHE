<?php $title = "DashboardContacts"; ?>
<?php ob_start(); ?>

<section id="dashboard">
    <section id="dashboardTable">

        <section id="contactList">
            <h1>MESSAGES</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-mail</th>
                        <th>Subject</th>
                        <th>Message</th>
                     </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact) { ?>
                        <tr>
                            <div class="contact_content">                                
                                 <td>
                                    <h4><?php echo $contact['first_name'] ?></h4>
                                </td>
                                <td>
                                    <p><?php echo $contact['last_name'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $contact['email'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $contact['subject'] ?></p>
                                </td>
                                <td>
                                    <p><?php echo $contact['message'] ?></p>
                                </td>
                    
                            </div>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </section>
</section>
<?php $content = ob_get_clean(); ?>
<?php require 'views/backend/template.php'; ?>