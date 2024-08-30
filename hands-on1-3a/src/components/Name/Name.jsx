import './Name.css';

function Name({firstname,lastname}) {
    return (
        <div className= "n-Text">
            <h1>{firstname}{lastname}</h1>
        </div>
    )
}
export default Name;