import logo from './logo.svg';
import './App.css';
import Name from './components/Name/Name';
import Section from './components/Section/Section';
import Dscrip from './components/Dscrip/Dscrip';

function App() {

  const userInfromation = {
    firstname: "Nicollette Edilbert B.",
    lastname: " Mendoza",
    section: "BSIT-3A",
    Description: "HI MAAYONg BUGTI SA TANAN DI AYSI ICKO"
  }

  return (
   <div className="app">
    <Name firstname={userInfromation.firstname} lastname={userInfromation.lastname}/>
    <Section section={userInfromation.section}/>
    <Dscrip Description={userInfromation.Description}/>
   </div>
  );
}

export default App;
