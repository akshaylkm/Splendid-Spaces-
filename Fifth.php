<?php
	include"dbconnect.php";
	session_start();
	$uname=$_SESSION["email"];
	?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    
    <style type="text/css">
        .auto-style1 {
            width: 100%;
        }
        .auto-style4 {
            height: 80px;
        }
        .auto-style5 {
            width: 327px;
            height: 81px;
        }
        .auto-style6 {
            width: 785px;
            text-align: left;
        }
        .auto-style7 {
            width: 444px;
            height: 124px;
        }
        .auto-style8 {
            width: 61px;
            height: 70px;
        }
        .auto-style9 {
            width: 112px;
            height: 66px;
        }
        .auto-style10 {
            width: 88px;
            height: 74px;
        }
        .auto-style11 {
            width: 886px;
            text-align: center;
        }
        .auto-style12 {
            width: 173px;
        }
        .auto-style14 {
            width: 624px;
            height: 93px;
        }
        .auto-style15 {}
        .auto-style16 {
            width: 101px;
        }
        .auto-style17 {
            width: 990px;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <table class="auto-style1">
            <tr>
                <td class="auto-style4">
                    <table class="auto-style1">
                        <tr>
                            <td class="auto-style6">
                                <img alt="" class="auto-style7" src="Payment/Images/dp_hm_slider03.jpg" /></td>
                            <td style="text-align: right">
                                <img alt="" class="auto-style5" src="Payment/Images/payment-gateway-security.jpg" /></td>
                        </tr>
                    </table>
                </td>
                
            </tr>
            <tr>
                <td class="auto-style15" >
                    <asp:ScriptManager ID="ScriptManager1" runat="server"></asp:ScriptManager>
           
                      <fieldset><legend style="text-align: center; font-weight: 700">Payment Details</legend>
       
        <table class="auto-style1">
            <tr>
                <td class="auto-style29"></td>
                <td style="text-align: right" class="auto-style29">
                   
                   </td>
                <td class="auto-style29"></td>
            </tr>
            <tr>
                <td class="auto-style18"></td>
                <td class="auto-style18" style="text-align: center; color: #3399FF">Payment Success...</td>
                <td class="auto-style18"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <table class="auto-style1">
                        <tr>
                            <td class="auto-style30">Merchant</td>
                            <td class="auto-style31"></td>
                            <td class="auto-style32">
                               <?php echo $_SESSION['name'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style33">Date</td>
                            <td class="auto-style34"></td>
                            <td class="auto-style35">
                                <?php echo date("Y-m-d") ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="auto-style36">Amount</td>
                            <td class="auto-style37"></td>
                            <td class="auto-style38">
                                Rs.1000
                                <strong>/-</strong></td>
                        </tr>
                        <tr>
                            <td class="auto-style36">Transaction ID</td>
                            <td class="auto-style37"></td>
                            <td class="auto-style38">125544
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="auto-style21" style="text-align: center">
                                <input type="submit" value="Back To Home" name="sub"/>
                            </td>
                        </tr>
                        <tr>
                        <td colspan="3" class="auto-style21" style="text-align: center">
                        	<a href="#" onclick="window.print(); return false;">Print</a>
							</td>
                        </tr>
                        <?php
					    if(isset($_REQUEST['sub']))
					    {
							
							
							header("Location:CustomerHome.php");
						}
											   ?>
                    </table>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style39"></td>
                <td style="text-align: center" class="auto-style39">&nbsp;&nbsp;&nbsp;
                    <img alt="" class="auto-style24" src="Payment/Icons/1391813453_mastercard1.gif" />
                    <img alt="" class="auto-style24" src="Payment/Icons/1391813456_visa2.gif" />
                    <img alt="" class="auto-style24" src="Payment/Icons/1391813466_westernunion.gif" />
                    <img alt="" class="auto-style24" src="Payment/Icons/1391813469_cirrus1.gif" />
                    <img alt="" class="auto-style24" src="Payment/Icons/1391813513_visa1.gif" /></td>
                <td class="auto-style39"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        
    </fieldset></div>
                </td>
            </tr>
            <tr>
               
                <td class="auto-style4">
                    <table align="center">
                        <tr>
                            <td class="auto-style12">
                                <img alt="" class="auto-style8" src="Payment/Images/secure.jpg" /><img alt="" class="auto-style9" src="Payment/Images/firstdataglobal_cardinal_centinel_3d-secure_b909dac69bbd832054c1bf467e389c8f_verified_by_visa_1.gif" /></td>
                            <td class="auto-style11">
                                <img alt="" class="auto-style14" src="Payment/Images/seq.JPG" /></td>
                            <td style="text-align: right">
                                <img alt="" class="auto-style10" src="Payment/Images/ImgSml_PaymentGateway.jpg" /></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    </form>
</body>
</html>