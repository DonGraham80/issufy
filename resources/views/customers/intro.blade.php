@extends('layout')


@section('content')
    <div class="row" style='padding:30px'>
      Welcome to my Laravel Customer DB. The following App has been developed on the below spec with my comments about each part. I have extended the spec to incorperate other skills or features which are helpful for this process.<br>
      Also at the bottom of the page is the EXTRA and TODO list.<br><br>
      I have addressed this project as an MVP project and thus small items will be missing.<br><br>

      Once this page has been read please use the navigation menu on the left to open the customer listings<br><br>

      <div class="card ">
                            <div class="header">
                                <h4 class="title">Spec</h4>
                                <p class="category">The following has been achieved</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>You need to install a new Laravel Framework.
                                    <p class="text-primary">
                                    As mentioned in our communications, although I have used Laravel in the past lightly it is not a  framework I would use on a daily basis. This was my first time using version 5, but all went well. It is like riding a bike, you never really forget.
                                    </p>
                                                 </td>
                                                
                                            </tr>

                                             <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>You need to create a simple customers database for the above listing in any DBMS (<b>MySQL</b>, PostGres etc)  
                                                 <p class="text-primary">
                                    MYSQL database was used.
                                    </p> 
                                                </td>
                                                
                                            </tr>
                                            
                                            
                                             <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td> You need to setup Laravel application so that administrator can login and can see a list of all customers. Admin can click on each customer on listing page and can see full detail of customer. 
                                    <p class="text-primary">
                                    As you can see this was created.
                                    </p> 
                                               </td>
                                                
                                            </tr>

                                              
                                             <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td> If you can make list of customers from restfull api.
                                                    <p class="text-primary">
                                    You can access a json output for this on an example api/customers/1
                                    </p> 
                                               </td>
                                                
                                            </tr>

                                               <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td> Use some tricks to make listing query faster. ( Assume you want to fetch data from multiple tables . i-e customer_addresses, customer_types, customer_categories )
                                                      <p class="text-primary">
                                    In the database of 5000+ customers I have created two tables, one for general information and another for address.
                                <br> To make things faster pagination was used along with table joins.
                                    </p> 
                                               </td>
                                                
                                            </tr>
                                                 <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" >
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td> If we want to use mem cache in some places for customer listing page where and how would you use it. 
                                                      <p class="text-primary">
                                   Mem cache was not used in this test app, however I could be used in a couple of places but this depends on several factors.<br>
                                   For example, the API call could cache the information but we need to ask howoften the data is updated and id the end user needs real time data and of course how many calls to the API might thier be.
                                    </p> 
                                               </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Created 24th April 2018
                                    </div>
                                </div>
                            </div>
                        </div>
    </div>

       <div class="card ">
                            <div class="header">
                                <h4 class="title">Extras</h4>
                                <p class="category">These are a few things I added</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Front End
                                    <p class="text-primary">
                                    In the interview I was asked about my Front end abilities. I made sure that in this demo I have demostrated the use of jquery, css etc to produce a viduall pleasing experience. Of course my front end abilities are much more.
                                    </p>
                                                 </td>
                                                
                                            </tr>
                                    <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Customer
                                                    <p class="text-primary">
                                                   Full CRUD ability with customer records.
                                                    </p>
                                                 </td>
                                                
                                            </tr>
                                    
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Search
                                                    <p class="text-primary">
                                                   With more than 5000 records in the database I thought it would be useful to add a simple search
                                                    </p>
                                                 </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" checked="">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Pagination
                                                    <p class="text-primary">
                                                   I added pagination to make sure page load speeds are fast.
                                                    </p>
                                                 </td>
                                                
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Created 24th April 2018
                                    </div>
                                </div>
                            </div>
                        </div>

    
     <div class="card ">
                            <div class="header">
                                <h4 class="title">TODO</h4>
                                <p class="category">The things that were not done or still need to be done</p>
                            </div>
                            <div class="content">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" >
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Front End
                                    <p class="text-primary">
                                   Further improvements to styling and page transitions
                                    </p>
                                                 </td>
                                                
                                            </tr>
                                    <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" >
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Code Comments
                                                    <p class="text-primary">
                                                   There is not a lot of commenting in the code, this is not a normal thing for me but in the case of being able to produce a functional MVP I not to waist time on commenting.
                                                    </p>
                                                 </td>
                                                
                                            </tr>
                                    
                                            <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" >
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Login
                                                    <p class="text-primary">
                                                   Although you can login and the auth works, it is not setup to deny access to the customer page should to visit the page directly. The reason being that I demostrated the ability to login and thus moved on to the next item of the spec.
                                                    </p>
                                                 </td>
                                                
                                            </tr>
                                         

                                             <tr>
                                                <td>
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox" >
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td>Customer details
                                                    <p class="text-primary">
                                                   On the read page of the customer details it is missing many items. Just a case of adding them .
                                                    </p>
                                                 </td>
                                                
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Created 24th April 2018
                                    </div>
                                </div>
                            </div>
                        </div>



    </div>
    </div>
@endsection