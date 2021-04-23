    function mark_All(obj)
        {
            //alert("hiii");
            
            var frm=this.document.user_details;
            var frm_len=frm.elements.length;
            for(var i=0; i<frm_len; i++)
            {
                if(frm.elements[i].type=="checkbox" && frm.elements[i].name=="user_id[]")
                {
                    frm.elements[i].checked=obj.checked;
                }
            }
            
        }

    ////////Delete All stident//////////
        function delete_all()
        {
            if(confirm("Are You Sure To Delete All Selected Records"))
            {
                document.user_details.act.value="delete_multi_user";
                document.user_details.submit();
            }
        }

        function printout()
    {
        window.print();
    }

    function delete_user(u_id)
        {
            if(confirm("Are You Sure To Delete ?"))
            {   
                document.user_details.act.value="delUser";
                document.user_details.u_id.value=u_id;
                document.user_details.submit();
            }

        }

    function user_profile(u_id){

        document.user_details.act.value="editprofile";
                //document.user_details.u_id.value=u_id;
                document.user_details.submit();   
    }

        