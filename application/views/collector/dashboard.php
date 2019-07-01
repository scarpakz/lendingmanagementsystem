<div class="user-dashboard">
    <div class="user-content">
        <h1>Collector - Dashboard</h1>
        Logged on as [Collector]
        <h4 id="dateTime"></h4>
        <button type="button" id="history" class="history-btn" onclick="showButtons()"><i class="fa fa-plus"></i> Add</button>
        <button type="button" class="close" onclick="hideButtons()"><i class="fa fa-wrong"></i> Close</button>
        <br><br>
        <button type="button" class="btn-green" onclick="showClientForm()">Add Client</button>
        <div class="client-form" id="client-form">
            <div class="form-input">
                <h3>Client Information</h3>
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="">First Name</label>
                        <input type="text" placeholder="Ex: Juan" required="">
                    </div> 
                    <div class="input-group">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Ex: De la Cruz" required="">
                    </div> 
                    <div class="input-group">
                        <label for="">Middle Name</label>
                        <input type="text" placeholder="Ex: Reyes">
                    </div>
                    <div class="input-group">
                        <label for="">Address</label>
                        <input type="text" placeholder="Ex: Manila" required="">
                    </div> 
                    <div class="input-group">
                        <label for="">Contact Number</label>
                        <input type="text" placeholder="Ex: 09123456789" required="">
                    </div> 
                    <div class="input-group">
                        <label for="">Desired Amount</label>
                        <input type="text" placeholder="Ex: 100000" required="">
                    </div> 
                    <div class="input-group">
                        <label for=""><strong>Select Term:</strong></label>
                        <select name="terms" id="terms" required="" onchange="selectedTerm()">
                            <option value="" disabled>--Click to Select--</option>
                            <option value="short_term">Short Term</option>
                            <option value="long_term">Long Term</option>
                        </select>
                    </div>
                    <div id="paymentCount">
                        <div id="input-group-calendar" class="input-group">
                            <label for=""><strong>From:</strong></label>
                            <select name="from_month" id="" required="">
                                <option value="">Jan</option>
                                <option value="">Feb</option>
                                <option value="">Mar</option>
                                <option value="">Apr</option>
                                <option value="">May</option>
                                <option value="">Jun</option>
                                <option value="">Jul</option>
                                <option value="">Aug</option>
                                <option value="">Sep</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                            <select name="from_day" id="" required="">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">Jun</option>
                                <option value="">Jul</option>
                                <option value="">Aug</option>
                                <option value="">Sep</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                            <select name="from_year" id="" required="">
                                <option value="">2019</option>
                                <option value="">2018</option>
                                <option value="">2017</option>
                                <option value="">Apr</option>
                                <option value="">May</option>
                                <option value="">Jun</option>
                                <option value="">Jul</option>
                                <option value="">Aug</option>
                                <option value="">Sep</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                            <br><br>
                            <label for=""><strong>To:</strong></label>
                            <select name="to_month" id="" required="">
                                <option value="">Jan</option>
                                <option value="">Feb</option>
                                <option value="">Mar</option>
                                <option value="">Apr</option>
                                <option value="">May</option>
                                <option value="">Jun</option>
                                <option value="">Jul</option>
                                <option value="">Aug</option>
                                <option value="">Sep</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                            <select name="to_day" id="" required="">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                                <option value="">5</option>
                                <option value="">Jun</option>
                                <option value="">Jul</option>
                                <option value="">Aug</option>
                                <option value="">Sep</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                            <select name="to_year" id="" required="">
                                <option value="">2019</option>
                                <option value="">2018</option>
                                <option value="">2017</option>
                                <option value="">Apr</option>
                                <option value="">May</option>
                                <option value="">Jun</option>
                                <option value="">Jul</option>
                                <option value="">Aug</option>
                                <option value="">Sep</option>
                                <option value="">Oct</option>
                                <option value="">Nov</option>
                                <option value="">Dec</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for=""><strong>Assign to: </strong> This->collector</label>
                            <!-- <select name="customer_intelligence" id="" required="">
                                <option value="" disabled>--Click to Select--</option>
                                <option value="">John</option>
                                <option value="">Doe</option>
                                <option value="">Dela Cruz</option>
                            </select> -->
                        </div>
                        <div class="input-group">
                            <input type="submit" value="Save" class="save-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="collector-form">
            <div class="form-input">
                <h3>Collector Information</h3>
                <form action="" method="POST">
                    <div class="input-group">
                        <label for="">First Name</label>
                        <input type="text" placeholder="Ex: Juan" required="">
                    </div> 
                    <div class="input-group">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Ex: De la Cruz" required="">
                    </div> 
                    <div class="input-group">
                        <label for="">Middle Name</label>
                        <input type="text" placeholder="Ex: Reyes">
                    </div> 
                    <div class="input-group">
                        <label for="">Address</label>
                        <input type="text" placeholder="Ex: Manila" required="">
                    </div> 
                    <div class="input-group">
                        <label for="">Contact Number</label>
                        <input type="text" placeholder="Ex: 09123456789" required="">
                    </div>
                    <div class="input-group">
                        <input type="submit" value="Save" class="save-btn">
                    </div>
                </form>
            </div>
        </div>

        <div class="user-table">
            <h3>Client</h3>
            <form action="" method="POST">
                <input type="text" name="search_client" placeholder="Search Client" required="" autofocus>
            </form>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>First Name</th>
                    <th>Address</th>
                    <th>Contact #</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Javier</td>
                        <td>Abrio</td>
                        <td>Jason</td>
                        <td>Villa Mila Aplaya, Jasaan Misamis Oriental</td>
                        <td>09068082248</td>
                        <td><a href="#"><i class="fa fa-trash"></i></a><a href="#"> <i class="fa fa-pencil"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
