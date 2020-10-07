function formvalidation()
{
    var name=document.name.value;
    if(name==null || name="")
        {
            alert("Name can't be blank");
            return false;
        }
}