
        function procesar(url) {
    
            var settings = {
            "async": true,
            "crossDomain": true,
            "url": ""+url+"api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJraWtlY20xOTk3QGdtYWlsLmNvbSIsImp0aSI6ImJkZDlmYWI1LThhYWYtNGY3OS1iZDJiLTJmZTZjODIwZTk4ZSIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTg3NzI1MzE2LCJ1c2VySWQiOiJiZGQ5ZmFiNS04YWFmLTRmNzktYmQyYi0yZmU2YzgyMGU5OGUiLCJyb2xlIjoiIn0.b_xwxJ9TFDjcRHXqP_H6-5OEKkddlg81pnR3KGxZ3Iw",
            "method": "GET",
            "headers": {
                "cache-control": "no-cache"
                        }
                    }
                    $.ajax(settings).done(function (response) {
                        //alert(response.datos);
                        window.open(response.datos,"", "width=400, height=400")
                        console.log(response);
                        
        });
        
            
            } 


            function procesarmeta(url) {
    
                var settings = {
                "async": true,
                "crossDomain": true,
                "url": ""+url+"api_key=eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJraWtlY20xOTk3QGdtYWlsLmNvbSIsImp0aSI6ImJkZDlmYWI1LThhYWYtNGY3OS1iZDJiLTJmZTZjODIwZTk4ZSIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTg3NzI1MzE2LCJ1c2VySWQiOiJiZGQ5ZmFiNS04YWFmLTRmNzktYmQyYi0yZmU2YzgyMGU5OGUiLCJyb2xlIjoiIn0.b_xwxJ9TFDjcRHXqP_H6-5OEKkddlg81pnR3KGxZ3Iw",
                "method": "GET",
                "headers": {
                    "cache-control": "no-cache"
                            }
                        }
                        $.ajax(settings).done(function (response) {
                            //alert(response.datos);
                            window.open(response.metadatos,"", "width=400, height=400")
            });
            
                
                } 

                function llamadanasa(url) {
    
                    var settings = {
                    "async": true,
                    "crossDomain": true,
                    "url": ""+url+"api_key=lSujOc9GB8TFnUji1ywF37eBdYiAbfe7zsOjb2OD",
                    "method": "GET",
                    "headers": {
                        "cache-control": "no-cache"
                                }
                            }
                            $.ajax(settings).done(function (response) {
                                //alert(response.datos);
                                window.open(response.url,"", "width=400, height=400")
                                
                                //console.log(response);
                                
                });
                
                    
                    }
                    
                   
              