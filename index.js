import React from 'react';
import {BrowserRouter as Router,Route,
 Redirect,Switch} from 'react-router-dom';
 import { Link } from 'react-router-dom'
import Content from './content.html';
import Blogs from './blogs.html';

function Routes(){
    return (
    <Router>
      <div>
        <Switch>
           <Route path="/Blogs/" component={Blogs} />
           <Redirect from='/Blogs/' to="/content/" />
           <Route path="/content/" component={Content} />
        </Switch>
      </div>
    </Router>
    )
}