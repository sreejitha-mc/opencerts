function createCertTemplate() {
    console.log('createCertTemplate');
    var student_name = 'teststudent';
    var reg_no = 'testregno';
    $.ajax(
        {
            type    : 'GET',
            url     : `http://localhost:8081/create-cert-template?student_name=${student_name}&reg_no=${reg_no}`,
            success : function(result){
                console.log(result);
                if(result.title === 'success') {
                    $('.response-style').css('display', 'block');
                }
            }
        }
    );
}

function issueCert(){
    console.log('issuing certficate');
    var reg_no = 'testregno';
    $.ajax(
        {
            type    : 'GET',
            url     : `http://localhost:8081/issue-certificate?reg_no=${reg_no}`,
            success : function(result){
                console.log(result);
                if(result.title === ' success') {
                    $('.issue-style').css('display', 'block');
                }
            }
        }
    );
}

