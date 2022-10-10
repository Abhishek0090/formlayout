 
    <?php
    $action = $_POST['action'];
    $html = "";
if($action==1){


    $html .="
    <link rel= stylesheet  href= style.css >
    <link rel= stylesheet  href= birla2.css >
    <link rel= stylesheet  href= apollo.css >
    <link rel= stylesheet  href=//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css>
    <link href= https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css  rel= stylesheet  integrity= sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT  crossorigin= anonymous >
    <script src= https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js ></script>
    <script src= https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js ></script> 
    <div class=center_section mt-5   formalign  style=  width: 62% id=form1>
    <div class=row d-flex adjust flex-column col> 

<form  method=post>

        <div class=form-group>
            
            <div class=col d-flex flex-row aligninput  form-group>
                
                <span class=alphabet>o.</span> 
                <label class=inlinedivs for=>In case of accident : </label> 
                <span class=alphabet>i.</span>
                <label class=inlinedivs for=>Is it RTA -</label>
                <div class=form-check checkwidth>
                    <input  type=radio class=form-check-input autosave rta   id=rta name=rta value=Yes checked >Yes
                    <label class=inlinedivs class=form-check-label for=radio1></label>
                </div>
                
                <div class=form-check>
                    <input type=radio class=form-check-input autosave rta id=rta name=rta value=No >No
                    <label class=inlinedivsclass=form-check-label for=radio2 ></label>
                </div>
         </div>
                <div class=col-md-6 aligninput form-group>

                <span class=alphabet>ii.</span>
                <label class=inlinedivsfor=>Date of Injury : </label>
                <input type=text class=form-control class autosave  name=date_injury id=date_injury  >
                
            </div>
            <div class=col-md-6 aligninput form-group>

                <span class=alphabet>iii.</span>
                <label class=inlinedivsfor=>Reported to Police : </label>
                <div class=form-check checkwidth>
                    <input  type=radio class=form-check-input autosave police   id=police name=police value=Yes checked >Yes
                    <label class=inlinedivsclass=form-check-label for=radio1></label>
                </div>
                <div class=form-check>
                    <input type=radio class=form-check-input autosave police id=police name=police value=No >No
                    <label class=inlinedivs class=form-check-label for=radio2 ></label>
                </div>
            </div>
            </div>
            <div class=col-md-6 aligninput form-group>
    <span class=alphabet>b.</span>
    <label class=inlinedivsfor=>Injury / Disease caused due to substance abuse / alcohol consumption : </label>
    <div class=form-check checkwidth>
                    <input  type=radio class=form-check-input autosave alcohol   id=alcohol name=alcohol value=Yes checked >Yes
                    <label class=inlinedivsclass=form-check-label for=radio1></label>
                </div>
                <div class=form-check>
                    <input type=radio class=form-check-input autosave alcohol id=alcohol name=alcohol value=No >No
                    <label class=inlinedivsclass=form-check-label for=radio2 ></label>
    </div>
</div>

<div class=col-md-6 aligninput form-group>
<label class=inlinedivsfor=>Test Conducted to establish this :</label>
<div class=form-check checkwidth>
                    <input  type=radio class=form-check-input autosave test   id=test name=test value=Yes checked >Yes
                    <label class=inlinedivsclass=form-check-label for=radio1></label>
                </div>
                <div class=form-check>
                    <input type=radio class=form-check-input autosave test id=test name=test value=No >No (if Yes attach reports)
                    <label class=inlinedivsclass=form-check-label for=radio2 ></label>
    </div>       
</div>
<div class=col-md-6 aligninput form-group>
<span class=alphabet>q.</span>

<label class=inlinedivsfor=>In case of Maternity</label>
<div class=form-check checkwidth>
<label class=inlinedivsclass=form-check-label for=checkbox></label>
<input  type=checkbox class=form-check-input autosave    id=maternity name=maternity value=Yes checked >G
</div>
                <div class=form-check checkwidth>
                    <input type=checkbox class=form-check-input autosave maternity id=maternity name=maternity value=No >P
                    <label class=inlinedivsclass=form-check-label for=checkbox ></label>
            </div>  
            <div class=form-check checkwidth>
                            <input type=checkbox class=form-check-input autosave maternity id=maternity name=maternity value=No >L
                            <label class=inlinedivs class=form-check-label for=checkbox ></label>
            </div>  
                <div class=form-check checkwidth>
                                <input type= checkbox  class= form-check-input autosave maternity  id= maternity  name= maternity  value= No  >A
                                <label class= inlinedivs class= form-check-label  for= checkbox  ></label>
                </div>  
</div>  
        <div class = col-md-6 aligninput>

        
        <label class= inlinedivs >Date of Delivery</label>
        <input type=text class=form-control autosave id=dod  name=dod >
    </div>



<h5>TO BE FILLED BY THE INSURED/PATIENT</h5>
<h5>Details of the patient admitted </h5>
<div class=col-md-6 aligninput>
<span class=alphabet>a.</span>

<label class=inlinedivs >Date of admission : </label>
<input type=text class=form-control autosave id=doa  name=doa >
</div>
<div class=col-md-6 aligninput>
<span class=alphabet>b.</span>
<label class=inlinedivs >Time</label>
<input type=time class=form-control autosave id=time  name=time >
</div>
</div>


<div class=col-md-6 aligninput>
<span class=alphabet>c.</span>
<div class=col-md-6 aligninput>

<label class=inlinedivs >Is this an emergency / a planned hospitalization event ?</label>
<div class=form-check checkwidth>
                                <input type=radio class=form-check-input autosave emergency id=emergency name=emergency value=Emergency  checked >Emergency
                                <label class=inlinedivs class=form-check-label for=radio2 ></label>
   </div>  
        <div class=form-check checkwidth>
                                    <input type=radio class=form-check-input autosave planned id=emergency  name=emergency value=Planned >Planned
                                    <label class=inlinedivs  class=form-check-label for=radio2 ></label>
     </div>  
</div>

</div>

<div class=col-md-6 aligninput>
<span class=alphabet>d.</span>

<label class=inlinedivs >Expected no. of days stay in hospital :</label>
<input type=text class=form-control autosave id=stay_hospital  name=stay_hospital >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>e.</span>

<label class=inlinedivs >Room Type : </label>
<input type=text class=form-control autosave id=room_type name=room_type >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>f.</span>

<label class=inlinedivs >Per Day Room Rent + Nursing & Service Charges + Patient's Diet</label>
<input type=text  class=form-control autosave rent id=rent name=rent >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>g.</span>

<label class=inlinedivs >Expected cost of Investigation + diagnostics</label>
<input type=text class=form-control autosave cost_investigation id=cost_investigation name=cost_investigation >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>h.</span>

<label class=inlinedivs >ICU Charges : </label>
<input type=text class=form-control autosave icu_charges  id=icu_charges name=icu_charges>
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>i.</span>

<label class=inlinedivs >OT Charges</label>
<input type=text class=form-control autosave ot_charges id=ot_charges name=ot_charges >
</div>

<div class=col-md-6 aligninput>
<span class=alphabet>j.</span>

<label class=inlinedivs >Professional fees Surgeon + Anaesthetist Fees + consultation Charges :</label>

<input type=text class=form-control autosave fees_charges id=fees_charges name=fees_charges >

</div>
<div class=col-md-6 aligninput>
<span class=alphabet>k.</span>

<label class=inlinedivs >Medicines + Consumables + Cost of Implants(if applicable specify)Other hospital expenses if any:</label>
    
</div>
<div class=col-md-6 aligninput>

<input type=text class=form-control autosave id=medicines_expense name=medicines_expense >
</div>
<div class=col-md-6 aligninput>
<span class=alphabet>l.</span>

<label class=inlinedivs >All inclusive package charges if any applicable</label>
<input type=text class=form-control autosave id=inclusive name=inclusive > 
</div>


<div class=col-md-6 aligninput>
<span class=alphabet>m.</span>

<label class=inlinedivs >Sum total expected cost of hospitalisation</label>
<input type=text class=form-control autosave id=cost_hospital name=cost_hospital >
</div class=col-md-6 aligninput>
<h6>Mandatory : Past History of any chronic illness If yes , since (month/year)</h6>

<div>

</div>

<div class=col-md-6 aligninput>
<div class=form-check checkwidth>
                                <input type=checkbox class=form-check-input autosave diabetes id=diabetes name=diabetes value=No>
                </div>  
<label class=inlinedivs >Diabetes :</label>

<input type=text class=form-control autosave id=diabetes name=diabetes>
</div> 
<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
                                <input type=checkbox class=form-check-input autosave heart_disease  id= heart_disease  name= heart_disease  value= No  >
                </div>  
<label class=inlinedivs >Heart Disease :</label>
<input type=text class=form-control autosave id= heart_disease  name= heart_disease >
</div> 
<div class=col-md-6 aligninput>
<div class=form-check checkwidth>
                                <input type= checkbox  class= form-check-input autosave hypertension  id= hypertension  name= hypertension  value= No  >
                </div>  
<label class=inlinedivs >Hypertension :</label>
<input type=text class=form-control autosave id= hypertension  name= hypertension >
</div> 
<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
                                <input type= checkbox  class= form-check-input autosave hyperlipidemias  id= hyperlipidemias  name= hyperlipidemias  value= No  >
                </div>                          
<label class=inlinedivs >Hyperlipidemias :</label>
<input type=text class=form-control autosave id= hyperlipidemias  name= hyperlipidemias  >
</div>

<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
                                <input type= checkbox  class= form-check-input autosave osteoarthritis  id= osteoarthritis  name= osteoarthritis  value= No  >
                </div> 
                <label class=inlinedivs  >Osteoarthritis :</label> 
<input type=text class= form-control class   id= osteoarthritis   name= osteoarthritis >
</div>

<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
                                <input type= checkbox  class= form-check-input autosave ashtma_copd_bronchitis  id= ashtma_copd_bronchitis  name= ashtma_copd_bronchitis  value= No  >
                </div>  

<label class=inlinedivs >Asthma/COPD/Bronchitis :</label>

<input type=text class= form-control autosave input_size   id= ashtma_copd_bronchitis  name= ashtma_copd_bronchitis >
</div>

<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
          <input type= checkbox  class= form-check-input autosave cancer  id= cancer  name= cancer  value= No  >
                </div>  
            
            <label class=inlinedivs >Cancer :</label>

            <input type=text class= form-control autosave input_size    id= cancer  name= cancer >

</div>
<div class=col-md-6 aligninput>
<div class=form-check checkwidth>
                                <input type=checkbox class=form-check-input autosave alcohol id=alcohol name=alcohol value=No >
                </div>  
<label class=inlinedivs >Alcohol or drug abuse :</label>
<input type=text class=form-control autosave id=alcohol_drug name=alcohol_drug>
</div>
<div class=col-md-6 aligninput>

<div class=form-check checkwidth>
                                <input type=checkbox class=form-check-input autosave alcohol id=alcohol name=alcohol value=No >
                </div>  

<label class=inlinedivs >Any HIV or STD/Related ailment :</label>

<input type=text class=form-control autosave id=hiv_std name=hiv_std >
</div>
<div class=col-md-6  aligninput>

<label class=inlinedivs  style=margin-right:12px>Any other Ailment give details :</label>
<input type=text class=form-control autosave id=aliment name=aliment >
</div>
<p>(PLEASE READ VERY CAREFULLY)</p>
<label class=inlinedivs  style=margin:auto ; margin-right:10px;>We confirm having read understood and agreed to the Declarations on the reverse of this form</label>
<div class=col-md-6 aligninput>

    <span class=alphabet>a.</span>
    
    <label class=inlinedivs >Name of the treating doctor :</label>
    <input type=text class=form-control autosave id=treating_doctor name=treating_doctor >

</div>
<div class=col-md-6 aligninput>
<span class=alphabet>b.</span>

<label class=inlinedivs >Qualification :</label>
<input type=text class=form-control autosave id=qualification name=qualification >
</div>
<div class=col-md-6 aligninput>
<span class=alphabet>c.</span>

<label class=inlinedivs >Registration No. with State Code :</label>
<input type=text class=form-control autosave id=state_code name=state_code > 
</div>
<div style=display:flex;>

<div class=form-group col-md-6  style=margin-right:70px;>
<input type=text class=hospital_seal style=height: 45px;width: 12rem; margin-left: 25px; id=hospital_seal>
<p>Hospital Seal (Must include Hospital ID)</p>
<p>(IMPORTANT PLEASE TURN OVER)</p>
</div>        
<div class=form-group col-md-6 style=float:right;>
<input type=text class=patient_signature style=height: 45px;width: 12rem; margin-left: 25px; name=patient_signature id=patient_signature>
<p>Patient/Insured Name & Signature</p>
</div>
</div>
</form>
</div>

<script src=https://code.jquery.com/ui/1.13.2/jquery-ui.js></script>
        
<script src=https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js integrity=sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3 crossorigin=anonymous></script>
<script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js integrity=sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz crossorigin=anonymous></script>

    
    ";
}else 
if($action==2){

  
    $html .="
    <div class=container>
    
    <input type=text >address :</input>
    <input type=text> caste :</input>
    <input type=text>fax :</input>
    <button onclick=loaddata()>Next</button>
    
    </div>
    
    ";
}
    echo $html;
    ?>
       