

        <div class="container">
            <header></header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login"  background=transparent>
                            <!-- <form method="post" action="<?php echo base_url('login/getlogin'); ?>" onsubmit="return cekform();" >  -->
                            <form method="post" action="<?php echo base_url('login/getlogin'); ?>"> 
                                <h1>Login</h1> 
                                <p> 
                                    <label data-icon="u" > USERNAME ID </label>
                                    <input id="nomor_induk" name="nomor_induk" required="required" type="text" placeholder="Nomor Induk"/>
                                </p>
                                <p> 
                                    <label data-icon="p"> PASSWORD </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" /> 
                                    <?php $info = $this->session ->flashdata('info');
                                    if (!empty($info)) {
                                        echo $info;
                                    }
                                     ?>
                                </p>	
								
                                <p class="login button"> 				 
								<span> <input name="submit" type="submit" value="Login" id="submit" /> </span>
								</p>

                            </form>
                        </div>					
                    </div>
                </div>  
            </section>
        </div>