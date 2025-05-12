/**
 * VarDump Beautifier
 * A utility function to display variable dumps in a human-readable format.
 *
 * @param [type] ...$data
 *
 * @return void
 */
function viewVarDump( $value ) {
	echo "<pre 
                style='/*position: absolute; */
                z-index: 999999;
                background: black;
                color: lightgreen;
                padding: .5rem;
                margin-bottom: .5rem;
                display: block;
                min-width: 100%;'
              >";
	var_dump( $value );
	echo "</pre>";
}
