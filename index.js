import React from 'react';
import ReactDom from 'react-dom';
import {BrowserRouter as Router,Route,
 Redirect,Switch} from 'react-router-dom';

import Content from './content.html';
import Blogs from './blogs.html';
import { Link } from 'react-router-dom';
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

