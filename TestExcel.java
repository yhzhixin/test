package test;

import java.io.StringWriter;

import org.apache.velocity.*;
import org.apache.velocity.app.*;
import org.apache.velocity.runtime.RuntimeConstants;
import org.apache.velocity.runtime.resource.loader.ClasspathResourceLoader;

/**
 * test Velocity Template Engine
 */
public class TestExcel {

	public static void main(String[] args) {

		TestExcel.testEngine();

	}

	/**
   * Velocity Template Engineを使って、ファイルを出力する。
	 */
	public static void testEngine() {

		// Template Engine init
		VelocityEngine ve = new VelocityEngine();
		ve.setProperty(RuntimeConstants.RESOURCE_LOADER, "classpath");
		ve.setProperty("classpath.resource.loader.class", ClasspathResourceLoader.class.getName());
		ve.init();

		// Template contents
		VelocityContext context = new VelocityContext();
		context.put("name1", "Classmethod");
		context.put("name2", "クラスメソッド");
		
		// Template file
		Template t = ve.getTemplate( "templates/Message.vm" );
		StringWriter writer = new StringWriter();
		t.merge( context, writer );

		// output
		System.out.println(writer.toString());
	}

}
